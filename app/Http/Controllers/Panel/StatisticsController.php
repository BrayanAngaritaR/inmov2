<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Property\Commune;
use App\Models\Property\Destination;
use App\Models\Property\Opportunity;
use App\Models\Property\Property;
use App\Models\Property\Secretaryship;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
   //Solicitar que el usuario esté autenticado
   public function __construct()
   {
      $this->middleware('auth');
   }
   
   //Muestra la página principal de las estadísticas
   public function index()
   {
      //Obtener la lista de secretarías y la cantidad de inmuebles vinculadas a cada una de ellas
      $secretaryships = Secretaryship::withCount('properties')->orderBy('properties_count','DESC')->get();

      //Obtener la lista de destinaciones actuales y la cantidad de inmuebles vinculadas a cada una de ellas
      $destinations = Destination::with('properties')
         ->whereHas('properties')
         ->withCount('properties')
         ->orderBy('properties_count','DESC')->get();

      //Obtener la lista de destinaciones actuales y la cantidad de inmuebles vinculadas a cada una de ellas
      $communes = Commune::with('properties')
         ->whereHas('properties')
         ->withCount('properties')
         ->orderBy('properties_count','DESC')->get();

      /*
         ------------------------------------------
         Estadísticas de oportunidad y venta
         ------------------------------------------
      */
      //Cantidad de bienes actuales
      $properties_count = Property::all()->count();

      //Bienes con oportunidad inmobiliaria
      $opportunity = Opportunity::where('title', 'Oportunidad Inmobiliaria')->first();
      $opportunity_properties = Property::where('opportunity_id', $opportunity->id)->get()->count();
      $opportunity_properties_percent = $this->getPercent($opportunity_properties, $properties_count);

      //Bienes para la venta
      $for_sale = Opportunity::where('title', 'Gestión comercial ')->first();
      $for_sale_properties = Property::where('opportunity_id', $for_sale->id)->get()->count();
      $for_sale_properties_percent = $this->getPercent($for_sale_properties, $properties_count);

      

      //Obtener bienes para venta
      //Ver si el bien está para la venta mediante: Destinación actual = Gestión comercial
      //Acción venta ó venta y arriendo. O sea, que sea diferente a arriendo.



      return view('panel.statistics.index', compact([
         'secretaryships', 
         'destinations', 
         'communes',
         'opportunity_properties',
         'for_sale_properties',
         'properties_count'
      ]));
   }

   public function getPercent($value, $total){
      $percent = ($value / $total) * 100;
      return $percent;
   }
}
