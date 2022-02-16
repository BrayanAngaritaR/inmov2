<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Property\Action;
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
      $secretaryships = Secretaryship::withCount('properties')
         ->whereHas('properties')
         ->orderBy('properties_count','DESC')
         ->get();

      //Obtener la lista de destinaciones actuales y la cantidad de inmuebles vinculadas a cada una de ellas
      $destinations = []; 

      // Destination::with('properties')
      //    ->whereHas('properties')
      //    ->withCount('properties')
      //    ->orderBy('properties_count','DESC')->get();

      //Obtener la lista de destinaciones actuales y la cantidad de inmuebles vinculadas a cada una de ellas
      $communes = []; 

      // Commune::with('properties')
      //    ->whereHas('properties')
      //    ->withCount('properties')
      //    ->orderBy('properties_count','DESC')->get();

      /*
         ------------------------------------------
         Estadísticas de oportunidad y venta
         ------------------------------------------
      */

      //Cantidad de bienes actuales y publicados
      $properties_count = Property::all()->count();
      $published_properties_count = Property::where('status', 'Published')->get()->count();

      //Bienes con oportunidad inmobiliaria
      $opportunity = Opportunity::where('title', 'Oportunidad Inmobiliaria')->first();
      $opportunity_properties = Property::where('opportunity_id', $opportunity->id)->get()->count();
      $opportunity_properties_percent = $this->getPercent($opportunity_properties, $properties_count);

      //Bienes para la venta
      $for_sale = Opportunity::where('title', 'Gestión comercial ')->first();
      $for_sale_properties = Property::where('opportunity_id', $for_sale->id)->get()->count();
      $for_sale_properties_percent = $this->getPercent($for_sale_properties, $properties_count);

      
      //Obtener la cantidad de bienes Georreferenciados
      $georeferenced_properties_count = Property::where('georeferenced', 1)->get()->count();

      //Obtener la cantidad de bienes con RPH
      $rph_properties_count = Property::where('is_rph', 1)->get()->count();

      //Obtener bienes para venta
      //Ver si el bien está para la venta mediante: Destinación actual = Gestión comercial
      //Acción venta ó venta y arriendo. O sea, que sea diferente a arriendo.


      //Bienes por acción: https://codepen.io/TorsteinHonsi/pen/KMNbRN
      $actions = Action::with('properties')
         ->whereHas('properties')
         ->withCount('properties')
         ->orderBy('properties_count','DESC')->get();

      /*
         ------------------------------------------
         Cantidad de bienes analizados por mes
         ------------------------------------------
      */

      $current_year = date('Y');

      //Total de bienes
         $january_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '01')
            ->get()
            ->count();

         $february_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '02')
            ->get()
            ->count();

         $march_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '03')
            ->get()
            ->count();

         $april_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '04')
            ->get()
            ->count();

         $may_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '05')
            ->get()
            ->count();

         $june_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '06')
            ->get()
            ->count();

         $july_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '07')
            ->get()
            ->count();

         $august_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '08')
            ->get()
            ->count();

         $september_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '09')
            ->get()
            ->count();

         $october_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '10')
            ->get()
            ->count();

         $november_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '11')
            ->get()
            ->count();

         $december_properties = Property::whereYear('created_at', '=', $current_year)
            ->whereMonth('created_at', '=', '12')
            ->get()
            ->count();

      //Total de bienes publicados
         $january_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '01')
            ->where('status', 'Published')
            ->get()
            ->count();

         $february_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '02')
            ->where('status', 'Published')
            ->get()
            ->count();

         $march_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '03')
            ->where('status', 'Published')
            ->get()
            ->count();

         $april_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '04')
            ->where('status', 'Published')
            ->get()
            ->count();

         $may_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '05')
            ->where('status', 'Published')
            ->get()
            ->count();

         $june_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '06')
            ->where('status', 'Published')
            ->get()
            ->count();

         $july_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '07')
            ->where('status', 'Published')
            ->get()
            ->count();

         $august_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '08')
            ->where('status', 'Published')
            ->get()
            ->count();

         $september_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '09')
            ->where('status', 'Published')
            ->get()
            ->count();

         $october_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '10')
            ->where('status', 'Published')
            ->get()
            ->count();

         $november_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '11')
            ->where('status', 'Published')
            ->get()
            ->count();

         $december_properties_published = Property::whereYear('updated_at', '=', $current_year)
            ->whereMonth('updated_at', '=', '12')
            ->where('status', 'Published')
            ->get()
            ->count();

      return view('panel.statistics.index', compact([
         'secretaryships', 
         'destinations', 
         'communes',
         'opportunity_properties',
         'published_properties_count',
         'for_sale_properties',
         'properties_count',
         'georeferenced_properties_count',
         'rph_properties_count',
         'actions',

         //Información de bienes por mes

         'january_properties',
         'february_properties',
         'march_properties',
         'april_properties',
         'may_properties',
         'june_properties',
         'july_properties',
         'august_properties',
         'september_properties',
         'october_properties',
         'november_properties',
         'december_properties',

         'january_properties_published',
         'february_properties_published',
         'march_properties_published',
         'april_properties_published',
         'may_properties_published',
         'june_properties_published',
         'july_properties_published',
         'august_properties_published',
         'september_properties_published',
         'october_properties_published',
         'november_properties_published',
         'december_properties_published',
      ]));
   }

   public function getPercent($value, $total){
      $percent = ($value / $total) * 100;
      return $percent;
   }
}
