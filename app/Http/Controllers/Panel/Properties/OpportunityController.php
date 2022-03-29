<?php

namespace App\Http\Controllers\Panel\Properties;

use App\Http\Controllers\Controller;
use App\Models\Property\Property;
use App\Models\Property\PropertySale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class OpportunityController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index(Property $property)
   {
      $can_sell = false;

      //Verificar si la oportunidad es "Gestión comercial" y es diferente de "Arriendo"
      if($property->opportunity_id == 2 AND $property->action_id != 6){
         $can_sell = true;
      }

      $for_sale_property = PropertySale::where('property_id', $property->id)->first();
      
      return view('panel.properties.opportunity.index', compact(['can_sell', 'property', 'for_sale_property']));
   }

   public function edit(Property $property)
   {
      $for_sale_property = PropertySale::where('property_id', $property->id)->first();
      return view('panel.properties.opportunity.edit', compact(['property', 'for_sale_property']));
   }

   public function update(Request $request, Property $property)
   {
      $for_sale_property = PropertySale::where('property_id', $property->id)->first();

      if (!$for_sale_property) {

         PropertySale::create([
            'area_according_to_vur' => $request->area_according_to_vur,
            'common_areas' => $request->common_areas,
            'percentage_of_fc_ownership' => $request->percentage_of_fc_ownership,
            'ownership_percentage_vur' => $request->ownership_percentage_vur,
            'geoeconomic_zone_value' => $request->geoeconomic_zone_value,
            'for_sale_destination' => $request->for_sale_destination,
            'for_sale_action' => $request->for_sale_action,
            'for_sale' => $request->for_sale,
            'for_sale_observations' => $request->for_sale_observations,
            'property_id' => $property->id
         ]);

         Session::flash('info', ['success', __('Se ha creado la información de venta')]);
      } else {

         $for_sale_property->update([
            'area_according_to_vur' => $request->area_according_to_vur,
            'common_areas' => $request->common_areas,
            'percentage_of_fc_ownership' => $request->percentage_of_fc_ownership,
            'ownership_percentage_vur' => $request->ownership_percentage_vur,
            'geoeconomic_zone_value' => $request->geoeconomic_zone_value,
            'for_sale_destination' => $request->for_sale_destination,
            'for_sale_action' => $request->for_sale_action,
            'for_sale' => 1,//$request->for_sale,
            'for_sale_observations' => $request->for_sale_observations,
            'property_id' => $property->id
         ]);

         Session::flash('info', ['success', __('Se ha actualizado la información de venta')]);
      }
 
      return back();

   }

   public function destroy($id)
   {
   //
   }
}
