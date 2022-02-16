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
   }

   public function index(Request $request)
   {
      $currentURL = url()->full();

      $actions = Action::orderBy('title', 'ASC')->whereHas('properties')->get();
      $destinations = Destination::orderBy('title', 'ASC')->whereHas('properties')->get();
      $districts = District::orderBy('name', 'ASC')->whereHas('properties')->get();
      $macroprojects = Macroproject::orderBy('name', 'ASC')->get();
      //Instrumento de tercer nivel
      $instruments = ThirdLevelInstrument::orderBy('title', 'ASC')->get(); 
      $floor_uses = FloorUse::orderBy('title', 'ASC')->get(); 

      $properties = Property::where('status', 'Published')
         ->with('district')
         ->latest()
         ->get();

      $filter_orderBy = Str::between($currentURL, '?orderBy=', '%3Fdistrict%3D');
      $filter_district = Str::between($currentURL, '%3Fdistrict%3D', '%3Farea');
      $filter_area = Str::between($currentURL, '%3Farea%3D', '%3Faction');
      $filter_action = Str::between($currentURL, '%3Faction%3D', '%3Fcommune');
      $filter_commune = Str::after($currentURL, '%3Fcommune%3D');

      if ($filter_orderBy != 'latest') {
         $properties = Property::where('status', 'Published')
         ->with('district')
         ->get();
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
         if ($filter_area == 'higher') {
            $properties = $properties->sortByDesc('cadastral_area');
         } else {
            $properties = $properties->sortBy('cadastral_area');
         }
      }

      // if ($commune != 'all') {
      //    $properties = $properties->where('commune_id', $commune)
      //    ->where('status', 'Published');
      // }


      //Verificar si se están filtrando los resultados por:

      //Comuna


      //Más reciente | Más antiguo
      // if ($request->has('orderBy')) {
      //    $orderBy = request('orderBy');
      //    //dd("dddddd");
      // } 

      // if (request()->has('orderBy')) {
         

      //    if ($orderBy =! 'latest') {
      //       $properties = Property::where('status', 'Published')
      //          ->with('district')
      //          ->get();
      //    }
      // } 

      //Barrio
      // if (request()->has('district')) {
      //    $district = request('district');
      //    if ($district != 'all') {
      //       $properties = $properties->where('district_id', request('district'))
      //       ->where('status', 'Published');
      //    }
      // } 

      //Área

      //Acción
      // if (request()->has('action')) {
      //    $action = request('action');
      //    $properties = $properties->where('action_id', request('action'))
      //    ->where('status', 'Published');
      // } 
      
      return view($this->template.'properties.index', compact([
         'actions', 'macroprojects', 'districts', 'properties', 'destinations', 
         'instruments', 'floor_uses', 'filter_orderBy', 'filter_district', 'filter_area', 'filter_action', 'filter_commune'
      ]));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
   //
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request)
   {
   //
   }

   /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
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
      //$titles = [1 => 'CESION DE FAJAS-EQUIPAMIENTO-EPQ1', 2 =>'JAC SAN FRANCISCO DE PAULA', 3 => 'BODEGA DE ACOPIO MUNICIPAL No.2', 4 =>'LAVADERO DE CARROS LOVAINA', 5 =>'LOTE PARA EQUIPAMIENTO'];

      // $array_random_title = array_rand($titles);

      // $random_title = $titles[$array_random_title];

      
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function edit($id)
   {
   //
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, $id)
   {
   //
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function destroy($id)
   {
   //
   }
}
