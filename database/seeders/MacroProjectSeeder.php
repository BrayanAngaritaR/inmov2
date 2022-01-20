<?php

namespace Database\Seeders;

use App\Models\Property\Macroproject;
use Illuminate\Database\Seeder;

class MacroProjectSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      Macroproject::create(['name' => '-- Sin seleccionar']);
      Macroproject::create(['name' => 'Río Sur']);
      Macroproject::create(['name' => 'Río Centro']);
      Macroproject::create(['name' => 'Río Norte']);
      Macroproject::create(['name' => 'AIE_MED Borde Urbano Nororiental']);
      Macroproject::create(['name' => 'AIE_MED Borde Urbano Noroccidental']);
      Macroproject::create(['name' => 'AIE_MED Borde Urbano Suroccidental']);
      Macroproject::create(['name' => 'AIE_MED Transversalidad La Iguaná']);
      Macroproject::create(['name' => 'AIE_MED Transversalidad Santa Elena']);
      Macroproject::create(['name' => 'AIE_MED Borde Urbano San Antonio de Prado']);
      Macroproject::create(['name' => 'AIE_MED Borde Urbano Suroriental']);
      Macroproject::create(['name' => 'Otro']);
      Macroproject::create(['name' => 'Ninguno']);
      Macroproject::create(['name' => 'No encontrado']);
      Macroproject::create(['name' => 'No requiere análisis']);
      Macroproject::create(['name' => 'No aplica']);
   }
}
