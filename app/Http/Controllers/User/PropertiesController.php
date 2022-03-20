<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Base\File;
use App\Models\Base\Image;
use App\Models\Property\Action;
use App\Models\Property\Commune;
use App\Models\Property\Destination;
use App\Models\Property\District;
use App\Models\Property\FloorUse;
use App\Models\Property\Macroproject;
use App\Models\Property\Property;
use App\Models\Property\ThirdLevelInstrument;
use App\Models\Property\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PropertiesController extends Controller
{
   protected $template;

   public function __construct()
   {
      $this->template = env('TEMPLATE');
      $this->url = $currentURL = url()->full();
   }

   public function index(Request $request)
   {
      //Filters 
      $communes = Commune::whereHas('properties')->orderBy('code')->get();
      $districts = [];
      $actions = Action::orderBy('title', 'ASC')->whereHas('properties')->get();
      $destinations = Destination::orderBy('title', 'ASC')->whereHas('properties')->get();
      $macroprojects = Macroproject::orderBy('name', 'ASC')->get();
      //Instrumento de tercer nivel
      $instruments = ThirdLevelInstrument::orderBy('title', 'ASC')->get(); 
      $floor_uses = FloorUse::orderBy('title', 'ASC')->get();
      $treatments = Treatment::orderBy('title', 'ASC')->get();

      //Verificar si se están aplicando los filtros
      $show_collapse = ''; //Clase para mostrar filtros avanzados
      $filter_orderBy = '';
      $filter_commune = Str::between($this->url, 'commune=', '%3Fdistrict%3D');
      $filter_district = Str::between($this->url, '%3Fdistrict%3D', '%3Fdestination%3D');
      $filter_destination = Str::between($this->url, '%3Fdestination%3D', '%3Fopportunity%3D');
      $filter_opportunity = Str::between($this->url, '%3Fopportunity%3D', '%3Faction%3D');
      $filter_action = Str::between($this->url, '%3Faction%3D', '%3Farea%3D');
      $filter_area = Str::between($this->url, '%3Farea%3D', '%3Fmacroproject%3D');
      $filter_macroproject = Str::between($this->url, '%3Fmacroproject%3D', '%3Ftreatment%3D');
      $filter_treatment = Str::between($this->url, '%3Ftreatment%3D', '%3Finstrument%3D');
      $filter_instrument = Str::between($this->url, '%3Finstrument%3D', '%3Ffloor_use%3D');
      $filter_floor_use = Str::between($this->url, '%3Ffloor_use%3D', '%3Frph%3D');
      $filter_rph = Str::between($this->url, '%3Frph%3D', '%3Floan%3D');
      $filter_loan = Str::between($this->url, '%3Floan%3D', '%3Fbic%3D');
      $filter_bic = Str::between($this->url, '%3Fbic%3D', '%3Fmanagement%3D');
      $filter_management = Str::after($this->url, '%3Fmanagement%3D');

      // dd(
      //    "Communa: " . $filter_commune 
      //    . " | Barrio: " . $filter_district 
      //    . " | Destinación: " . $filter_destination 
      //    . " | Oportunidad: " . $filter_opportunity 
      //    . " | Área: " . $filter_area 
      //    . " | Acción: " . $filter_action 
      //    . " | Tratamiento: " . $filter_treatment
      //    . " | Instrumento: " . $filter_instrument
      //    . " | Uso del suelo: " . $filter_floor_use
      //    . " | Macroproyecto: " . $filter_macroproject
      //    . " | RPH: " . $filter_rph
      //    . " | Comodato: " . $filter_loan
      //    . " | BIC: " . $filter_bic
      //    . " | Proyecto gestionado: " . $filter_management
      // );

      $properties = Property::query();

      $properties->where('status', 'Published')
         ->with('district');

      //Filtrar por comuna
      if (strpos($this->url, 'commune')) {
         if ($filter_commune != 'all') {
            $properties->where('commune_id', $filter_commune);
            $districts = District::orderBy('name', 'ASC')
               ->whereHas('properties')
               ->where('commune_id', $filter_commune)
               ->get();
         }
      }

      //Filtrar por barrio
      if (strpos($this->url, 'district')) {
         if ($filter_district != 'all') {
            $properties->where('district_id', $filter_district);
         }
      }

      //Filtrar por destinación
      if (strpos($this->url, 'destination')) {
         if ($filter_destination != 'all') {
            $properties->where('destination_id', $filter_destination);
         }
      }

      //Filtrar por oportunidad
      if (strpos($this->url, 'opportunity')) {
         if ($filter_opportunity != 'all') {
            $properties->where('opportunity_id', $filter_opportunity);
         }
      }

      //Filtrar por área
      // if (strpos($this->url, 'area')) {
      //    if ($filter_area != 'all') {
      //       $properties->where('cadastral_area', $filter_area);
      //    }
      // }

      //Filtrar por acción
      if (strpos($this->url, 'action')) {
         if ($filter_action != 'all') {
            $properties->where('action_id', $filter_action);
         }
      }

      //Filtrar por tratamiento
      if (strpos($this->url, 'treatment')) {
         if ($filter_treatment != 'all') {
            $properties->where('treatment_id', $filter_treatment);
         }
      }

      //Filtrar por macroproyecto
      if (strpos($this->url, 'macroproject')) {
         if ($filter_macroproject != 'all') {
            $properties->where('macroproject_id', $filter_macroproject);
            $show_collapse = 'show';
         }
      }

      //Filtrar por instrumento de tercer nivel
      if (strpos($this->url, 'instrument')) {
         if ($filter_instrument != 'all') {
            $properties->where('third_level_instrument_id', $filter_instrument);
            $show_collapse = 'show';
         }
      }

      //Filtrar por uso del suelo
      if (strpos($this->url, 'floor_use')) {
         if ($filter_floor_use != 'all') {
            $properties->where('floor_use_id', $filter_floor_use);
            $show_collapse = 'show';
         }
      }

      //Filtrar por bienes con RPH
      if (strpos($this->url, 'rph')) {
         if ($filter_rph != 0) {
            $properties->where('is_rph', $filter_rph);
            $show_collapse = 'show';
         }
      }

      //Filtrar por bienes con comodato
      if (strpos($this->url, 'loan')) {
         if ($filter_loan != 0) {
            $properties->where('loan', $filter_loan);
            $show_collapse = 'show';
         }
      }

      //Filtrar por bienes de interés cultural
      if (strpos($this->url, 'bic')) {
         if ($filter_bic != 0) {
            $properties->where('bic', $filter_bic);
            $show_collapse = 'show';
         }
      }

      //Filtrar por bienes con RPH
      if (strpos($this->url, 'management')) {
         if ($filter_management != 0) {
            $properties->where('project_managed', '!=', null);
            $show_collapse = 'show';
         }
      }

      //Paginar los resultados por cada 20
      $properties = $properties->paginate(20)->appends(request()->query());

      return view($this->template.'properties.index', compact([
         //Filters
         'communes', 'districts', 'destinations', 'actions', 'macroprojects', 'properties', 'destinations', 'instruments', 'floor_uses', 'treatments',
         //Applied filters
         'filter_commune',
         'filter_district',
         'filter_destination',
         'filter_opportunity',
         'filter_area',
         'filter_action',
         'filter_treatment',
         'filter_instrument',
         'filter_floor_use',
         'filter_macroproject',
         'filter_rph',
         'filter_loan',
         'filter_bic',
         'filter_management',
         'show_collapse',
         //
         'filter_orderBy' 
      ]));
   }

   public function index3(Request $request)
   {
      //Filters 
      $communes = Commune::whereHas('properties')->orderBy('code')->get();
      $districts = [];
      $actions = Action::orderBy('title', 'ASC')->whereHas('properties')->get();
      $destinations = Destination::orderBy('title', 'ASC')->whereHas('properties')->get();
      $macroprojects = Macroproject::orderBy('name', 'ASC')->get();
      //Instrumento de tercer nivel
      $instruments = ThirdLevelInstrument::orderBy('title', 'ASC')->get(); 
      $floor_uses = FloorUse::orderBy('title', 'ASC')->get();
      $treatments = Treatment::orderBy('title', 'ASC')->get();

      //Verificar si se están aplicando los filtros
      $show_collapse = ''; //Clase para mostrar filtros avanzados
      $filter_orderBy = '';
      $filter_commune = Str::between($this->url, 'commune=', '%3Fdistrict%3D');
      $filter_district = Str::between($this->url, '%3Fdistrict%3D', '%3Fdestination%3D');
      $filter_destination = Str::between($this->url, '%3Fdestination%3D', '%3Fopportunity%3D');
      $filter_opportunity = Str::between($this->url, '%3Fopportunity%3D', '%3Faction%3D');
      $filter_action = Str::between($this->url, '%3Faction%3D', '%3Farea%3D');
      $filter_area = Str::between($this->url, '%3Farea%3D', '%3Fmacroproject%3D');
      $filter_macroproject = Str::between($this->url, '%3Fmacroproject%3D', '%3Ftreatment%3D');
      $filter_treatment = Str::between($this->url, '%3Ftreatment%3D', '%3Finstrument%3D');
      $filter_instrument = Str::between($this->url, '%3Finstrument%3D', '%3Ffloor_use%3D');
      $filter_floor_use = Str::between($this->url, '%3Ffloor_use%3D', '%3Frph%3D');
      $filter_rph = Str::between($this->url, '%3Frph%3D', '%3Floan%3D');
      $filter_loan = Str::between($this->url, '%3Floan%3D', '%3Fbic%3D');
      $filter_bic = Str::between($this->url, '%3Fbic%3D', '%3Fmanagement%3D');
      $filter_management = Str::after($this->url, '%3Fmanagement%3D');

      // dd(
      //    "Communa: " . $filter_commune 
      //    . " | Barrio: " . $filter_district 
      //    . " | Destinación: " . $filter_destination 
      //    . " | Oportunidad: " . $filter_opportunity 
      //    . " | Área: " . $filter_area 
      //    . " | Acción: " . $filter_action 
      //    . " | Tratamiento: " . $filter_treatment
      //    . " | Instrumento: " . $filter_instrument
      //    . " | Uso del suelo: " . $filter_floor_use
      //    . " | Macroproyecto: " . $filter_macroproject
      //    . " | RPH: " . $filter_rph
      //    . " | Comodato: " . $filter_loan
      //    . " | BIC: " . $filter_bic
      //    . " | Proyecto gestionado: " . $filter_management
      // );

      $properties = Property::query();

      $properties->where('status', 'Published')
         ->with('district');

      //Filtrar por comuna
      if (strpos($this->url, 'commune')) {
         if ($filter_commune != 'all') {
            $properties->where('commune_id', $filter_commune);
            $districts = District::orderBy('name', 'ASC')
               ->whereHas('properties')
               ->where('commune_id', $filter_commune)
               ->get();
         }
      }

      //Filtrar por barrio
      if (strpos($this->url, 'district')) {
         if ($filter_district != 'all') {
            $properties->where('district_id', $filter_district);
         }
      }

      //Filtrar por destinación
      if (strpos($this->url, 'destination')) {
         if ($filter_destination != 'all') {
            $properties->where('destination_id', $filter_destination);
         }
      }

      //Filtrar por oportunidad
      if (strpos($this->url, 'opportunity')) {
         if ($filter_opportunity != 'all') {
            $properties->where('opportunity_id', $filter_opportunity);
         }
      }

      //Filtrar por área
      // if (strpos($this->url, 'area')) {
      //    if ($filter_area != 'all') {
      //       $properties->where('cadastral_area', $filter_area);
      //    }
      // }

      //Filtrar por acción
      if (strpos($this->url, 'action')) {
         if ($filter_action != 'all') {
            $properties->where('action_id', $filter_action);
         }
      }

      //Filtrar por tratamiento
      if (strpos($this->url, 'treatment')) {
         if ($filter_treatment != 'all') {
            $properties->where('treatment_id', $filter_treatment);
         }
      }

      //Filtrar por macroproyecto
      if (strpos($this->url, 'macroproject')) {
         if ($filter_macroproject != 'all') {
            $properties->where('macroproject_id', $filter_macroproject);
            $show_collapse = 'show';
         }
      }

      //Filtrar por instrumento de tercer nivel
      if (strpos($this->url, 'instrument')) {
         if ($filter_instrument != 'all') {
            $properties->where('third_level_instrument_id', $filter_instrument);
            $show_collapse = 'show';
         }
      }

      //Filtrar por uso del suelo
      if (strpos($this->url, 'floor_use')) {
         if ($filter_floor_use != 'all') {
            $properties->where('floor_use_id', $filter_floor_use);
            $show_collapse = 'show';
         }
      }

      //Filtrar por bienes con RPH
      if (strpos($this->url, 'rph')) {
         if ($filter_rph != 0) {
            $properties->where('is_rph', $filter_rph);
            $show_collapse = 'show';
         }
      }

      //Filtrar por bienes con comodato
      if (strpos($this->url, 'loan')) {
         if ($filter_loan != 0) {
            $properties->where('loan', $filter_loan);
            $show_collapse = 'show';
         }
      }

      //Filtrar por bienes de interés cultural
      if (strpos($this->url, 'bic')) {
         if ($filter_bic != 0) {
            $properties->where('bic', $filter_bic);
            $show_collapse = 'show';
         }
      }

      //Filtrar por bienes con RPH
      if (strpos($this->url, 'management')) {
         if ($filter_management != 0) {
            $properties->where('project_managed', '!=', null);
            $show_collapse = 'show';
         }
      }

      //Paginar los resultados por cada 20
      $properties = $properties->paginate(20)->appends(request()->query());

      return view($this->template.'properties.index3', compact([
         //Filters
         'communes', 'districts', 'destinations', 'actions', 'macroprojects', 'properties', 'destinations', 'instruments', 'floor_uses', 'treatments',
         //Applied filters
         'filter_commune',
         'filter_district',
         'filter_destination',
         'filter_opportunity',
         'filter_area',
         'filter_action',
         'filter_treatment',
         'filter_instrument',
         'filter_floor_use',
         'filter_macroproject',
         'filter_rph',
         'filter_loan',
         'filter_bic',
         'filter_management',
         'show_collapse',
         //
         'filter_orderBy' 
      ]));
   }

   public function filter(Request $request)
   {
      $currentURL = url()->full();
      $communes = Commune::whereHas('properties')->orderBy('name')->get();

      $actions = Action::orderBy('title', 'ASC')->whereHas('properties')->get();
      $destinations = Destination::orderBy('title', 'ASC')->whereHas('properties')->get();
      $districts = District::orderBy('name', 'ASC')->whereHas('properties')->get();
      $macroprojects = Macroproject::orderBy('name', 'ASC')->get();
      //Instrumento de tercer nivel
      $instruments = ThirdLevelInstrument::orderBy('title', 'ASC')->get(); 
      $floor_uses = FloorUse::orderBy('title', 'ASC')->get(); 

      //Obtener todas las propiedades publicadas
      $properties = Property::query();

      $properties->where('status', 'Published')
         ->with('district');

      //dd($properties);

      //Verificar si se están aplicando los filtros
      $filter_orderBy = Str::between($this->url, '?orderBy=', '%3Fdistrict%3D');
      $filter_district = Str::between($this->url, '%3Fdistrict%3D', '%3Farea');
      $filter_area = Str::between($this->url, '%3Farea%3D', '%3Faction');
      $filter_action = Str::between($this->url, '%3Faction%3D', '%3Fcommune');
      $filter_commune = Str::after($this->url, '%3Fcommune%3D');

      if ($filter_orderBy != 'latest') {
         $properties = Property::where('status', 'Published')
         ->with('district');
      }

      if ($filter_district != 'null') {
         $properties = $properties->where('district_id', $filter_district)
            ->where('status', 'Published');
      }

      if ($filter_action != 'null') {
         $properties = $properties->where('action_id', $filter_action)
            ->where('status', 'Published');
      }

      if ($filter_area != 'null') {
         //$properties->get();
         if ($filter_area == 'higher') {
            //$properties = $properties->sortByDesc('cadastral_area');
         } else {
            //$properties = $properties->sortBy('cadastral_area');
         }
      }
      
      $properties = $properties->paginate(20)->appends(request()->query());

      //dd($properties);

      return view($this->template.'properties.index2', compact([
         'communes',
         'actions', 'macroprojects', 'districts', 'properties', 'destinations', 
         'instruments', 'floor_uses', 'filter_orderBy', 'filter_district', 'filter_area', 'filter_action', 'filter_commune'
      ]));
   }

   public function show(Property $property)
   {
      if ($property->status == 'Published') {

         //Imágenes del inmueble
         $images = Image::where('imageable_id', $property->id)
         ->where('imageable_type', 'App\Models\Property\Property')
         ->get();

         //Archivos del inmueble
         $files = File::where('fileable_id', $property->id)
         ->where('fileable_type', 'App\Models\Property\Property')
         ->get();

         return view($this->template.'properties.show', compact(['property', 'images', 'files']));
      }

      return view($this->template.'errors.no-property-available');
   }
}
