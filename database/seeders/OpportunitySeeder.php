<?php

namespace Database\Seeders;

use App\Models\Property\Action;
use App\Models\Property\Opportunity;
use Illuminate\Database\Seeder;

class OpportunitySeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      //$opportunity_1 = Opportunity::create(['title' => '-- Sin seleccionar']);
      $opportunity_1 = Opportunity::create(['title' => 'Oportunidad Inmobiliaria']);
      $opportunity_2 = Opportunity::create(['title' => 'Gestión comercial ']);
      $opportunity_3 = Opportunity::create(['title' => 'Otro']);
      $opportunity_4 = Opportunity::create(['title' => 'No requiere análisis']);

      //Action::create(['title' => '-- Sin seleccionar', 'opportunity_id' => $opportunity_1['id']]);

      Action::create(['title' => 'Residencial', 'opportunity_id' => $opportunity_1['id']]);
      Action::create(['title' => 'Comercial', 'opportunity_id' => $opportunity_1['id']]);
      Action::create(['title' => 'Servicios', 'opportunity_id' => $opportunity_1['id']]);
      Action::create(['title' => 'Mixto', 'opportunity_id' => $opportunity_1['id']]);

      Action::create(['title' => 'Venta', 'opportunity_id' => $opportunity_2['id']]);
      Action::create(['title' => 'Arriendo', 'opportunity_id' => $opportunity_2['id']]);
      Action::create(['title' => 'Venta o arriendo', 'opportunity_id' => $opportunity_2['id']]);

      Action::create(['title' => 'Cesión', 'opportunity_id' => $opportunity_3['id']]);
      Action::create(['title' => 'Englobar', 'opportunity_id' => $opportunity_3['id']]);
      Action::create(['title' => 'Desenglobar', 'opportunity_id' => $opportunity_3['id']]);
      Action::create(['title' => 'Legalizar', 'opportunity_id' => $opportunity_3['id']]);
      Action::create(['title' => 'Revisar BI', 'opportunity_id' => $opportunity_3['id']]);
      Action::create(['title' => 'Revisar catastro', 'opportunity_id' => $opportunity_3['id']]);
      Action::create(['title' => 'Dar baja', 'opportunity_id' => $opportunity_3['id']]);
      Action::create(['title' => 'Sin acción', 'opportunity_id' => $opportunity_3['id']]);
      Action::create(['title' => 'Sección pública', 'opportunity_id' => $opportunity_3['id']]);
      Action::create(['title' => 'Espacio público', 'opportunity_id' => $opportunity_3['id']]);
      Action::create(['title' => 'Vía proyectada', 'opportunity_id' => $opportunity_3['id']]);
      Action::create(['title' => 'Catalogar como bien de uso público', 'opportunity_id' => $opportunity_3['id']]);
   }
}
