<?php

namespace Database\Seeders;

use App\Models\Property\Threat;
use Illuminate\Database\Seeder;

class ThreatSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      Threat::create(['title' => '-- Sin seleccionar']);
      Threat::create(['title' => 'Alto riesgo no mitigable']);
      Threat::create(['title' => 'Alta']);
      Threat::create(['title' => 'Media - Zona con condiciones de riesgo']);
      Threat::create(['title' => 'Baja']);
      Threat::create(['title' => 'Muy baja']);
      Threat::create(['title' => 'N/A - Sin amenaza- Sin riesgo']);
   }
}
