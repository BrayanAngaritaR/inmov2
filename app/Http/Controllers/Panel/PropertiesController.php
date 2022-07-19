<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Property\Action;
use App\Models\Property\Commune;
use App\Models\Property\Destination;
use App\Models\Property\District;
use App\Models\Property\FloorClassification;
use App\Models\Property\FloorUse;
use App\Models\Property\Macroproject;
use App\Models\Property\Notary;
use App\Models\Property\Opportunity;
use App\Models\Property\Polygon;
use App\Models\Property\Property;
use App\Models\Property\PropertyType;
use App\Models\Property\Secretaryship;
use App\Models\Property\SecretaryshipAssetCode;
use App\Models\Property\ThirdLevelInstrument;
use App\Models\Property\Threat;
use App\Models\Property\Treatment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class PropertiesController extends Controller
{
   public function __construct()
   {
      // $this->middleware(['auth', 'role:Admin|Collaborator']);
      $this->middleware(['auth']);

   }

   public function index()
   {
      $properties = Property::with(['district', 'commune'])
         ->latest()
         ->paginate(20);

      return view('panel.properties.index', compact(['properties']));
   }

   public function create()
   {
      $secretaryships = Secretaryship::orderBy('title', 'ASC')->get();
      $propertytypes = PropertyType::all();
      $asset_secretaryships = SecretaryshipAssetCode::all();
      $notaries = Notary::all();
      $communes = Commune::get();

      return view('panel.properties.create', compact(['secretaryships', 'propertytypes', 'asset_secretaryships', 'notaries', 'communes']));
   }

   public function store(Request $request)
   {
      $validator = Validator::make(
         $request->all(),
         [
            'code' => ['required', 'max:255', 'unique:properties,code'],
            'link' => 'required',
            'plate' => 'required',
            'fixed_asset_code_id' => 'required',
            'fixed_asset' => 'required',
            'sss_description' => ['required', 'max:255'],
            'sss_address' => ['required', 'max:255'],
            'urbanization_or_neighborhood' => ['required', 'max:255'],
            'cbml' => ['required', 'digits:11', 'min:0'],
            'cadastral_address' => ['required'],
            'cadastral_area' => ['required'],
            'construction_area' => ['required'],
            'property_valuation' => ['required'],
         ],
         [
            'code.unique' => 'Ya existe otro inmueble con ese código',
            'code.required' => 'El código es requerido',
            'code.max' => 'El código no debe ser mayor a 255 dígitos',
            'fixed_asset.required' => 'El activo fijo es requerido',
            'sss_description.required' => 'Debes agregar una descripción',
            'sss_description.max' => 'La descripción no debe ser mayor a 255 dígitos',
            'sss_address.required' => 'Debes agregar una dirección',
            'sss_address.max' => 'La dirección no debe ser mayor a 255 dígitos',
            'urbanization_or_neighborhood.required' => 'Debes agregar un barrio o urbanización',
            'urbanization_or_neighborhood.max' => 'El barrio o urbanización no debe ser mayor a 255 dígitos',
            'cbml.required' => 'Debes agregar un código CBML',
            'cbml.digits' => 'El código CBML debe 11 dígitos. Prueba con un 0 al inicio para completar',
            'cbml.min' => 'El código CBML no debe ser inferior a 0',
            'cadastral_address.required' => 'Debes agregar la dirección de catastro',
            'cadastral_area.required' => 'Debes agregar el área catastral',
            'construction_area.required' => 'Debes agregar el área de construcción',
            'property_valuation.required' => 'Debes agregar el avalúo catastral',
         ]
      );

      if ($validator->passes()) {
         $property = Property::create([
            'secure_code' => Str::uuid()->toString(),
            'code' => $request->code,
            'link' => $request->link,
            'plate' => $request->plate,
            'repeated' => $request->repeated,
            'repeated_concept' => $request->repeated_concept,
            'discharged' => $request->discharged,
            'secretaryship_id' => $request->secretaryship,
            'property_type_id' => $request->property_id,
            'fixed_asset_code_id' => $request->fixed_asset_code_id,
            'fixed_asset' => $request->fixed_asset,
            'sss_description' => $request->sss_description,
            'commercial_appraisal' => $request->commercial_appraisal,
            'sss_address' => $request->sss_address,
            'urbanization_or_neighborhood' => $request->urbanization_or_neighborhood,
            'plate_number' => $request->plate_number,
            'property_deed' => $request->property_deed,
            'units' => $request->units,
            'writing_date' => $request->writing_date,
            'notary_id' => $request->notary_id,
            'cbml' => $request->cbml,
            'commune_id' => $request->commune_id,
            'district_id' => $request->district_id,
            'cadastral_address' => $request->cadastral_address,
            'cadastral_area' => $request->cadastral_area,
            'construction_area' => $request->construction_area,
            'property_valuation' => $request->property_valuation,
            'is_rph' => $request->is_rph,
         ]);

         Session::flash('info', ['success', __('Se ha agregado el inmueble')]);

         return response()->json([
            'status' => 'ok',
            'url' => route('panel.properties.edit', $property),
         ]);
      }

      return response()->json(['error' => $validator->errors()]);
   }

   function getLatitude($lat)
   {
      //Calcular la latitud
      $lat_deg = $this->before('°', $lat);
      $lat_min = $this->between('°', "'", $lat);

      if (str_contains($lat, 'N')) {
         $lat_sec = $this->between("'", "N", $lat);
         $lat_orientation = 'N';
      } else {
         $lat_sec = $this->between("'", "S", $lat);
         $lat_orientation = 'S';
      }

      if ($lat_orientation == 'S') {
         $latitude = $this->DMStoDEC($lat_deg, $lat_min, $lat_sec);
         $latitude = '-' . $latitude;
      } else {
         $latitude = $this->DMStoDEC($lat_deg, $lat_min, $lat_sec);
      }

      return $latitude;
   }

   function getLongitude($long)
   {
      //Calcular longitud
      $long_deg = $this->before('°', $long);
      $long_min = $this->between('°', "'", $long);

      if (str_contains($long, 'W')) {
         $long_sec = $this->between("'", "W", $long);
         $long_orientation = 'W';
      } else {
         $long_sec = $this->between("'", "E", $long);
         $lat_orientation = 'E';
      }

      if ($long_orientation == 'W') {
         $longitude = $this->DMStoDEC($long_deg, $long_min, $long_sec);
         $longitude = '-' . $longitude;
      } else {
         $longitude = $this->DMStoDEC($long_deg, $long_min, $long_sec);
      }

      return $longitude;
   }

   function DMStoDEC($deg, $min, $sec)
   {
      return $deg + ($min * 60 + $sec) / 3600;
   }

   function after($char, $inthat)
   {
      if (!is_bool(strpos($inthat, $char))) {
         return substr($inthat, strpos($inthat, $char) + strlen($char));
      }
   }

   function before($char, $inthat)
   {
      return substr($inthat, 0, strpos($inthat, $char));
   }

   function between($char, $that, $inthat)
   {
      return $this->before($that, $this->after($char, $inthat));
   }

   public function edit(Property $property)
   {
      $secretaryships = Secretaryship::orderBy('title', 'ASC')->get();
      $propertytypes = PropertyType::all();
      $asset_secretaryships = SecretaryshipAssetCode::all();
      $notaries = Notary::all();
      $communes = Commune::orderBy('name', 'ASC')->get();
      $floor_classifications = FloorClassification::orderBy('title', 'ASC')->get();
      $macroprojects = Macroproject::orderBy('name', 'ASC')->get();
      $treatments = Treatment::orderBy('title', 'ASC')->get();
      $polygons = Polygon::orderBy('title', 'ASC')->get();
      $floor_uses = FloorUse::orderBy('title', 'ASC')->get();
      $third_level_instruments = ThirdLevelInstrument::orderBy('title', 'ASC')->get();
      $threats = Threat::orderBy('title', 'ASC')->get();
      $destinations = Destination::orderBy('title', 'ASC')->get();
      $opportunities = Opportunity::orderBy('title', 'ASC')->get();
      $users = User::role('Collaborator')->orderBy('name', 'ASC')->get();
      $responsables = $property->responsables();

      return view(
         'panel.properties.edit',
         compact([
            'secretaryships',
            'propertytypes',
            'asset_secretaryships',
            'notaries',
            'communes',
            'property',
            'floor_classifications',
            'macroprojects',
            'treatments',
            'polygons',
            'floor_uses',
            'third_level_instruments',
            'threats',
            'destinations',
            'opportunities',
            'users',
            'responsables'
         ])
      );
   }

   public function print(Property $property)
   {
      $secretaryships = Secretaryship::orderBy('title', 'ASC')->get();
      $propertytypes = PropertyType::all();
      $asset_secretaryships = SecretaryshipAssetCode::all();
      $notaries = Notary::all();
      $communes = Commune::orderBy('name', 'ASC')->get();
      $floor_classifications = FloorClassification::orderBy('title', 'ASC')->get();
      $macroprojects = Macroproject::orderBy('name', 'ASC')->get();
      $treatments = Treatment::orderBy('title', 'ASC')->get();
      $polygons = Polygon::orderBy('title', 'ASC')->get();
      $floor_uses = FloorUse::orderBy('title', 'ASC')->get();
      $third_level_instruments = ThirdLevelInstrument::orderBy('title', 'ASC')->get();
      $threats = Threat::orderBy('title', 'ASC')->get();
      $destinations = Destination::orderBy('title', 'ASC')->get();
      $opportunities = Opportunity::orderBy('title', 'ASC')->get();
      $users = User::role('Collaborator')->orderBy('name', 'ASC')->get();
      $responsables = $property->responsables();

      // $data = [
      //    'property' => $property,
      //    'secretaryships' => $secretaryships,
      //    'propertytypes' => $propertytypes,
      //    'asset_secretaryships' => $asset_secretaryships,
      //    'notaries' => $notaries,
      //    'communes' => $communes,
      //    'floor_classifications' => $floor_classifications,
      //    'macroprojects' => $macroprojects,
      //    'treatments' => $treatments,
      //    'polygons' => $polygons,
      //    'floor_uses' => $floor_uses,
      //    'third_level_instruments' => $third_level_instruments,
      //    'threats' => $threats,
      //    'destinations' => $destinations,
      //    'opportunities' => $opportunities,
      //    'users' => $users,
      //    'responsables' => $responsables,
      // ];

      // dd($data);
      
      $pdf = Pdf::loadView('panel.properties.print', compact([
            'secretaryships',
            'propertytypes',
            'asset_secretaryships',
            'notaries',
            'communes',
            'property',
            'floor_classifications',
            'macroprojects',
            'treatments',
            'polygons',
            'floor_uses',
            'third_level_instruments',
            'threats',
            'destinations',
            'opportunities',
            'users',
            'responsables'
         ]));
      return $pdf->stream();

      // return view(
      //    'panel.properties.edit',
         
      // );
   }

   public function change_status($property){
      $status = "Pending";

      //Verificar si el usuario autenticado tiene el rol de Admin o de Supervisor
      if(Auth::user()->hasRole(['Admin', 'Supervisor'])){
         //Dejar el estado del inmueble como estaba
         $status = $property->status;
         $property->status = $status;
         $property->user_id = Auth::id();
         $property->update();
      }
   }

   public function update_identification(Request $request, Property $property)
   {
      $validator = Validator::make(
         $request->all(),
         [
            'code' => ['required', 'max:255', Rule::unique('properties')->ignore($property->id)],

            'link' => 'required',
            'plate' => 'required',
            'fixed_asset' => 'required',
            'sss_description' => ['required', 'max:255'],
            'sss_address' => ['required', 'max:255'],
            'urbanization_or_neighborhood' => ['required', 'max:255'],
         ],
         [
            'code.unique' => 'Ya existe otro inmueble con ese código',
            'code.required' => 'El código es requerido',
            'code.max' => 'El código no debe ser mayor a 255 dígitos',
            'fixed_asset.required' => 'El activo fijo es requerido',
            'sss_description.required' => 'Debes agregar una descripción',
            'sss_description.max' => 'La descripción no debe ser mayor a 255 dígitos',
            'sss_address.required' => 'Debes agregar una dirección',
            'sss_address.max' => 'La dirección no debe ser mayor a 255 dígitos',
            'urbanization_or_neighborhood.required' => 'Debes agregar un barrio o urbanización',
            'urbanization_or_neighborhood.max' => 'El barrio o urbanización no debe ser mayor a 255 dígitos',
         ]
      );

      if ($validator->passes()) {

         $this->change_status($property);

         $property->update([
            'code' => $request->code,
            'link' => $request->link,
            'plate' => $request->plate,
            'repeated' => $request->repeated,
            'discharged' => $request->discharged,
            'repeated_concept' => $request->repeated_concept,
            'secretaryship_id' => $request->secretaryship,
            'property_type_id' => $request->property_id,
            'fixed_asset_code_id' => $request->fixed_asset_code_id,
            'fixed_asset' => $request->fixed_asset,
            'commercial_appraisal' => $request->commercial_appraisal,
            'sss_address' => $request->sss_address,
            'urbanization_or_neighborhood' => $request->urbanization_or_neighborhood,
            'sss_description' => $request->sss_description,
         ]);

         return response()->json([
            'status' => 'ok',
         ]);
      }

      return response()->json(['error' => $validator->errors()]);
   }

   public function update_cadastral(Request $request, Property $property)
   {
      $validator = Validator::make(
         $request->all(),
         [
            'cbml' => ['required', 'digits:11', 'min:0'],
            'district_id' => 'required',
            'cadastral_address' => ['required', 'max:255'],
            'cadastral_area' => 'required',
            'construction_area' => 'required',
            'property_valuation' => 'required',
         ],
         [
            'cbml.required' => 'Debes agregar un código CBML',
            'cbml.digits' => 'El código CBML debe 11 dígitos. Prueba con un 0 al inicio para completar',
            'cbml.min' => 'El código CBML no debe ser inferior a 0',
            'cadastral_address.required' => 'Debes agregar la dirección de catastro',
            'cadastral_address.max' => 'La dirección no debe ser mayor a 255 dígitos',
            'cadastral_area.required' => 'Debes agregar el área catastral',
            'construction_area.required' => 'Debes agregar el área de construcción',
            'property_valuation.required' => 'Debes agregar el avalúo catastral',
         ]
      );

      if ($validator->passes()) {
         $this->change_status($property);
         $property->update([
            'plate_number' => $request->plate_number,
            'property_deed' => $request->property_deed,
            'units' => $request->units,
            'writing_date' => $request->writing_date,
            'notary_id' => $request->notary_id,
            'which_notary_container' => $request->which_notary_container,
            'cbml' => $request->cbml,
            'commune_id' => $request->commune_id,
            'district_id' => $request->district_id,
            'cadastral_address' => $request->cadastral_address,
            'cadastral_area' => $request->cadastral_area,
            'construction_area' => $request->construction_area,
            'property_valuation' => $request->property_valuation,
            'is_rph' => $request->is_rph,
         ]);

         return response()->json([
            'status' => 'ok',
         ]);
      }

      return response()->json(['error' => $validator->errors()]);
   }

   public function update_normative(Request $request, Property $property)
   {
      $validator = Validator::make(
         $request->all(),
         [
            'lat' => 'required',
            'long' => 'required',
         ],
         [
            'lat.required' => 'Debes agregar una coordenada',
            'long.required' => 'Debes agregar una coordenada',
         ]
      );

      if ($validator->passes()) {
         $lat = $this->getLatitude($request->lat);
         $long = $this->getLongitude($request->long);
         $this->change_status($property);

         $property->update([
            'latitude' => $request->lat,
            'longitude' => $request->long,
            'map_latitude' => $lat,
            'map_longitude' => $long,
            'floor_classification_id' => $request->floor_classification_id,
            'macroproject_id' => $request->macroproject_id,
            'treatment_id' => $request->treatment_id,
            'polygon_id' => $request->polygon_id,
            'floor_use_id' => $request->floor_use_id,
            'third_level_instrument_id' => $request->third_level_instrument_id,
            'threat_torrential_avenues_id' => $request->threat_torrential_avenues_id,
            'threat_floods_id' => $request->threat_floods_id,
            'threat_mass_movements_id' => $request->threat_mass_movements_id,
            'other_protection_categories_id' => $request->other_protection_categories_id,
         ]);

         return response()->json([
            'status' => 'ok',
         ]);
      }

      return response()->json(['error' => $validator->errors()]);
   }

   public function update_documental(Request $request, Property $property)
   {
      $this->change_status($property);

      $property->update([
         'photography' => $request->photography,
         'cadastral_file' => $request->cadastral_file,
         'vur' => $request->vur,
         'title_study' => $request->title_study,
         'georeferenced' => $request->georeferenced,
         'scriptures' => $request->scriptures,
         'loan' => $request->loan,
         'loan_start_date' => $request->loan_start_date,
         'loan_end_date' => $request->loan_end_date,
         'entity_to_which_is_assigned' => $request->entity_to_which_is_assigned,
         'loan_information' => $request->loan_information,
         'expedient' => $request->expedient,
         'building_permit' => $request->building_permit,
         'resolution' => $request->resolution,
         'bic' => $request->bic,
         'bic_name' => $request->bic_name,
         'bic_group' => $request->bic_group,
         'bic_order' => $request->bic_order,
         'conservation_level' => $request->conservation_level,
         'bic_act' => $request->bic_act,
      ]);

      return response()->json([
         'status' => 'ok',
      ]);
   }

   public function update(Request $request, Property $property)
   {
      //Definir como pendiente el estado del inmueble
      $status = 'Pending';

      //Verificar si el que hace un cambio es un Admin o un Supervidor
      if(Auth::user()->hasRole(['Admin', 'Supervisor'])){
         if ($request->publish_now == 'Sí') {
            $status = 'Published';
         }
      }      

      $property->update([
         'status' => $status,
         'destination_id' => $request->destination_id,
         'opportunity_id' => $request->opportunity_id,
         'prioritization_level' => $request->prioritization_level,
         'action_id' => $request->action_id,
         'project_managed' => $request->project_managed,
         'opportunity_id_description' => $request->opportunity_id_description,
         'observations' => $request->observations,
         'date_of_analysis_by_sss' => $request->date_of_analysis_by_sss,
         'revised' => $request->revised,
         'available' => $request->available,
      ]);

      //Sincronizar los responsables
      $property->save_responsables()->sync($request->responsable_id); 

      return response()->json([
         'status' => 'ok',
      ]);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy(Property $property)
   {
      return back()->with('status', ['theme', 'Acción no permitida']);
   }
}