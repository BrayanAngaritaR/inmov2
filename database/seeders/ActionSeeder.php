<?php

namespace Database\Seeders;

use App\Models\Property\Action;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      Action::create(['title' => '-- Sin seleccionar']);
      Action::create(['title' => 'Residencial']);
      Action::create(['title' => 'Comercial']);
      Action::create(['title' => 'Servicios']);
      Action::create(['title' => 'Mixto']);
      Action::create(['title' => 'Venta']);
      Action::create(['title' => 'Arriendo']);
      Action::create(['title' => 'Venta o arriendo']);
      Action::create(['title' => 'Cesión']);
      Action::create(['title' => 'Englobar']);
      Action::create(['title' => 'Desenglobar']);
      Action::create(['title' => 'Legalizar']);
      Action::create(['title' => 'Revisar BI']);
      Action::create(['title' => 'Revisar catastro']);
      Action::create(['title' => 'Dar baja']);
      Action::create(['title' => 'Sin acción']);
      Action::create(['title' => 'Sección pública']);
      Action::create(['title' => 'Espacio público']);
      Action::create(['title' => 'Vía proyectada']);
      Action::create(['title' => 'Catalogar como bien de uso público']);
   }
}
