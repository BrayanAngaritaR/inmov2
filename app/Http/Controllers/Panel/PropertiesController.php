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
use App\Models\Property\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

class PropertiesController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $properties = Property::with(['district', 'commune'])->latest()->get();
      return view('panel.properties.index', compact(['properties']));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      $secretaryships = Secretaryship::orderBy('title', 'ASC')->get();
      $propertytypes = PropertyType::all();
      $asset_secretaryships = SecretaryshipAssetCode::all();
      $notaries = Notary::all();
      $communes = Commune::orderBy('name', 'ASC')->get();
      $districts = District::orderBy('name', 'ASC')->get();

      return view('panel.properties.create', compact([
         'secretaryships',
         'propertytypes',
         'asset_secretaryships',
         'notaries',
         'communes',
         'districts'
      ]));
   }

   public function create_old()
   {
      $secretaryships = Secretaryship::orderBy('title', 'ASC')->get();
      $propertytypes = PropertyType::all();
      $communes = Commune::orderBy('name', 'ASC')->get();
      $districts = District::orderBy('name', 'ASC')->get();
      $floorclassifications = FloorClassification::all();
      $macroprojects = Macroproject::orderBy('name', 'ASC')->get();
      $treatments = Treatment::orderBy('title', 'ASC')->get();
      $polygons = Polygon::orderBy('title', 'ASC')->get();
      $flooruses = FloorUse::orderBy('title', 'ASC')->get();
      $inst_3nivels = ThirdLevelInstrument::orderBy('title', 'ASC')->get();
      $destinations = Destination::orderBy('title', 'ASC')->get();
      $opportunities = Opportunity::orderBy('title', 'ASC')->get();
      $actions = Action::orderBy('title', 'ASC')->get();

      return view('panel.properties.create-old', compact([
         'secretaryships',
         'propertytypes',
         'communes',
         'districts',
         'floorclassifications',
         'macroprojects',
         'treatments',
         'polygons',
         'flooruses',
         'inst_3nivels', 
         'destinations', 
         'opportunities', 
         'actions'
      ]));
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request)
   {
      // $cadastral_file = false;
      // $vur = false;
      // $title_study = false;
      // $loan = false;

      // if ($request->cadastral_file) {
      //    $cadastral_file = true;
      // }

      // if ($request->vur) {
      //    $vur = true;
      // }

      // if ($request->title_study) {
      //    $title_study = true;
      // }

      // if ($request->loan) {
      //    $loan = true;
      // }

      // //Calcular latitud
      // $lat = $request->lat;
      // $lat_deg = $this->before('°', $lat);
      // $lat_min = $this->between ('°', "'", $lat);

      // if (str_contains($lat, 'N')) {
      //    $lat_sec = $this->between ("'", "N", $lat);
      //    $lat_orientation = 'N';
      // } else {
      //    $lat_sec = $this->between ("'", "S", $lat);
      //    $lat_orientation = 'S';
      // }

      // if ($lat_orientation == 'S') {
      //    $latitude = $this->DMStoDEC($lat_deg,$lat_min,$lat_sec);
      //    $latitude = '-'.$latitude;
      // } else {
      //    $latitude = $this->DMStoDEC($lat_deg,$lat_min,$lat_sec);
      // }

      // //Calcular longitud
      // $long = $request->long;
      // $long_deg = $this->before('°', $long);
      // $long_min = $this->between ('°', "'", $long);

      // if (str_contains($long, 'W')) {
      //    $long_sec = $this->between ("'", "W", $long);
      //    $long_orientation = 'W';
      // } else {
      //    $long_sec = $this->between ("'", "E", $long);
      //    $lat_orientation = 'E';
      // }

      // if ($long_orientation == 'W') {
      //    $longitude = $this->DMStoDEC($long_deg,$long_min,$long_sec);
      //    $longitude = '-'.$longitude;
      // } else {
      //    $longitude = $this->DMStoDEC($long_deg,$long_min,$long_sec);
      // }


      $validator = Validator::make($request->all(), [
         'code' => ['required', 'max:255'],
         'link' => 'required',
         'plate' => 'required|email',
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
      ], [
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
      ]);

     
      // if ($validator->passes()) {
      //    return response()->json(['success'=>'Added new records.']);
      // }

      return response()->json(['error'=>$validator->errors()]);

      $property = Property::create([
         'code' => $request->code,
         'link' => $request->link,
         'plate' => $request->plate,
         'repeated' => $request->repeated,
         'repeated_concept' => $request->repeated_concept,
         'discharged' => $request->discharged,
         'secretaryship_id' => $request->secretaryship,
         'property_id' => $request->property_id,
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
         'url' => route('panel.properties.edit', $property)
      ]);


      //return back()->with('status', ['theme', 'Se ha agregado el inmueble']);
   }

   function DMStoDEC($deg,$min,$sec)
   {
      return $deg+((($min*60)+($sec))/3600);
   }  

   function after ($char, $inthat)
   {
      if (!is_bool(strpos($inthat, $char)))
      return substr($inthat, strpos($inthat,$char)+strlen($char));
   }

   function before ($char, $inthat)
   {
      return substr($inthat, 0, strpos($inthat, $char));
   }

   function between ($char, $that, $inthat)
   {
      return $this->before ($that, $this->after($char, $inthat));
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function edit(Property $property)
   {
      $secretaryships = Secretaryship::orderBy('title', 'ASC')->get();
      $propertytypes = PropertyType::all();
      $asset_secretaryships = SecretaryshipAssetCode::all();
      $notaries = Notary::all();
      $communes = Commune::orderBy('name', 'ASC')->get();
      $districts = District::orderBy('name', 'ASC')->get();

      return view('panel.properties.edit', compact([
         'secretaryships',
         'propertytypes',
         'asset_secretaryships',
         'notaries',
         'communes',
         'districts',
         'property'
      ]));
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, Property $property)
   {
      $cadastral_file = false;
      $vur = false;
      $title_study = false;
      $loan = false;

      if ($request->cadastral_file) {
         $cadastral_file = true;
      }

      if ($request->vur) {
         $vur = true;
      }

      if ($request->title_study) {
         $title_study = true;
      }

      if ($request->loan) {
         $loan = true;
      }

      $property->secretaryship_id = $request->secretaryship;
      $property->property_type = $request->propertytype;
      $property->code = $request->code;
      $property->fixed_asset = $request->fixed_asset;
      $property->plate_number = $request->plate_number;
      $property->plate = $request->plate;
      $property->description = $request->description;
      $property->cbml = $request->cbml;
      $property->commune_id = $request->commune_id;
      $property->district_id = $request->district_id;
      $property->address = $request->address;
      $property->cadastral_area = $request->cadastral_area;
      $property->construction_area = $request->construction_area;
      $property->property_valuation = $request->property_valuation;
      $property->floor_clasification_id = $request->floor_clasification_id;
      $property->macroproject_id = $request->macroproject_id;
      $property->treatment_id = $request->treatment_id;
      $property->polygon_id = $request->polygon_id;
      $property->floor_use_id = $request->floor_use_id;
      $property->inst_3nivel_id = $request->inst_3nivel_id;
      $property->destination_id = $request->destination_id;
      $property->opportunity_id = $request->opportunity_id;
      $property->action_id = $request->action_id;
      $property->project_managed = $request->project_managed;
      $property->observations = $request->observations;
      $property->loan = $loan;
      $property->loan_start_date = $request->loan_start_date;
      $property->loan_end_date = $request->loan_end_date;
      $property->entity_id = $request->secretaryship;
      $property->loan_information = $request->loan_information;
      $property->cadastral_file = $cadastral_file;
      $property->vur = $vur;
      $property->title_study = $title_study;
      $property->link = $request->link;
      $property->property_opportunity = $request->property_opportunity;
      $property->priorization = $request->priorization;
      $property->latitude = $request->lat;
      $property->longitude = $request->long;

      $property->update();

      return back()->with('status', ['theme', 'Se ha actualizado el inmueble']);
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
