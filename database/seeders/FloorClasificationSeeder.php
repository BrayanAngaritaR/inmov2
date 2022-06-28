<?php

namespace Database\Seeders;

use App\Models\Property\FloorClassification;
use Illuminate\Database\Seeder;

class FloorClasificationSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      //INSERT INTO `floor_classifications`
      FloorClassification::create(['title' => '-- Sin seleccionar']);
      FloorClassification::create(['title' => 'Urbano']);
      FloorClassification::create(['title' => 'Rural']);
      FloorClassification::create(['title' => 'Expansión urbana']);
      FloorClassification::create(['title' => 'No encontrado']);
      FloorClassification::create(['title' => 'No requiere análisis']);
   }
}
