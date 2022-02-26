<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Base\File;
use App\Models\Base\Image;
use App\Models\Property\Action;
use App\Models\Property\Destination;
use App\Models\Property\District;
use App\Models\Property\FloorUse;
use App\Models\Property\Macroproject;
use App\Models\Property\Property;
use App\Models\Property\ThirdLevelInstrument;
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
      $actions = Action::orderBy('title', 'ASC')->whereHas('properties')->get();
      $destinations = Destination::orderBy('title', 'ASC')->whereHas('properties')->get();
      $districts = District::orderBy('name', 'ASC')->whereHas('properties')->get();
      $macroprojects = Macroproject::orderBy('name', 'ASC')->get();
      //Instrumento de tercer nivel
      $instruments = ThirdLevelInstrument::orderBy('title', 'ASC')->get(); 
      $floor_uses = FloorUse::orderBy('title', 'ASC')->get();

      //Verificar si se están aplicando los filtros
      $filter_orderBy = Str::between($this->url, '?orderBy=', '%3Fdistrict%3D');
      $filter_district = Str::between($this->url, '%3Fdistrict%3D', '%3Farea');
      $filter_area = Str::between($this->url, '%3Farea%3D', '%3Faction');
      $filter_action = Str::between($this->url, '%3Faction%3D', '%3Fcommune');
      $filter_commune = Str::after($this->url, '%3Fcommune%3D');

      $properties = Property::query();

      $properties->where('status', 'Published')
         ->with('district');

      if (strpos($this->url, 'commune')) {
         if ($filter_commune != 'null') {
            $properties->where('commune_id', $filter_commune)
            ->with('district');
         }
      }

      if ($filter_orderBy != 'latest') {
         $properties = $properties->latest();
      }

      if ($filter_district != 'null') {
         $properties = $properties->where('district_id', $filter_district);
      }

      if ($filter_action != 'null') {
         $properties = $properties->where('action_id', $filter_action);
      }

      // if ($filter_area != 'null') {
      //    //$properties->get();
      //    if ($filter_area == 'higher') {
      //       $properties = $properties->sortByDesc('cadastral_area');
      //    } else {
      //       //$properties = $properties->sortBy('cadastral_area');
      //    }
      // }

      $properties = $properties->paginate(20)->appends(request()->query());

      return view($this->template.'properties.index', compact([
         'actions', 'macroprojects', 'districts', 'properties', 'destinations', 
         'instruments', 'floor_uses', 'filter_orderBy', 'filter_district', 'filter_area', 'filter_action', 'filter_commune'
      ]));
   }

   public function filter(Request $request)
   {
      $currentURL = url()->full();

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

      dd($properties);

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

      dd($properties);

      return view($this->template.'properties.index', compact([
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
