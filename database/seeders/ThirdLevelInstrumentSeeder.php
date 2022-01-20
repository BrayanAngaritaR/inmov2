<?php

namespace Database\Seeders;

use App\Models\Property\ThirdLevelInstrument;
use Illuminate\Database\Seeder;

class ThirdLevelInstrumentSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      ThirdLevelInstrument::create(['title' => '-- Sin seleccionar']);
      ThirdLevelInstrument::create(['title' => 'Plan especial de manejo del patrimonio (PEMP)']);
      ThirdLevelInstrument::create(['title' => 'Plan Parcial (PP)']);
      ThirdLevelInstrument::create(['title' => 'Plan Maestro (PM)']);
      ThirdLevelInstrument::create(['title' => 'PUI']);
      ThirdLevelInstrument::create(['title' => 'API']);
      ThirdLevelInstrument::create(['title' => 'Planes de Legalización y Regularización Urbanística']);
      ThirdLevelInstrument::create(['title' => 'Unidades de Planificación Rural']);
      ThirdLevelInstrument::create(['title' => 'Ninguno']);
      ThirdLevelInstrument::create(['title' => 'No encontrado']);
      ThirdLevelInstrument::create(['title' => 'No requiere análisis']);
   }
}
