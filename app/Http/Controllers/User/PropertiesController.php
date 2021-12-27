<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Property\Action;
use App\Models\Property\Destination;
use App\Models\Property\District;
use App\Models\Property\FloorUse;
use App\Models\Property\Macroproject;
use App\Models\Property\Property;
use App\Models\Property\ThirdLevelInstrument;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
   protected $template;

   public function __construct()
   {
      $this->template = env('TEMPLATE');
   }

   public function index()
   {
      $actions = Action::orderBy('title', 'ASC')->get();
      $destinations = Destination::orderBy('title', 'ASC')->get();
      $districts = District::orderBy('name', 'ASC')->get();
      $macroprojects = Macroproject::orderBy('name', 'ASC')->get();
      $instruments = ThirdLevelInstrument::orderBy('title', 'ASC')->get(); //Instrumento de tercer nivel
      $floor_uses = FloorUse::orderBy('title', 'ASC')->get(); 

      $properties = Property::with(['destination', 'propertyType', 'district', 'action'])->latest()->get();
      return view($this->template.'properties.index', compact(['actions', 'macroprojects', 'districts', 'properties', 'destinations', 'instruments', 'floor_uses']));
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
   public function show()
   {
      $titles = [1 => 'CESION DE FAJAS-EQUIPAMIENTO-EPQ1', 2 =>'JAC SAN FRANCISCO DE PAULA', 3 => 'BODEGA DE ACOPIO MUNICIPAL No.2', 4 =>'LAVADERO DE CARROS LOVAINA', 5 =>'LOTE PARA EQUIPAMIENTO'];

      $array_random_title = array_rand($titles);

      $random_title = $titles[$array_random_title];

      return view($this->template.'properties.show', compact('random_title'));
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