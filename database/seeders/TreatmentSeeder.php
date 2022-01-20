<?php

namespace Database\Seeders;

use App\Models\Property\Treatment;
use Illuminate\Database\Seeder;

class TreatmentSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      Treatment::create(['title' => '-- Sin seleccionar']);
      Treatment::create(['title' => 'Áreas de Preservación de Infraestructuras y del Sistema Público y Colectivo']);
      Treatment::create(['title' => 'Conservación']);
      Treatment::create(['title' => 'Conservación en zonas de influencia de los BIC Nacional']);
      Treatment::create(['title' => 'Conservación Patrimonial']);
      Treatment::create(['title' => 'Conservación por alto riesgo no mitigable']);
      Treatment::create(['title' => 'Conservación Urbanística']);
      Treatment::create(['title' => 'Consolidación Nivel 1']);
      Treatment::create(['title' => 'Consolidación Nivel 2']);
      Treatment::create(['title' => 'Consolidación Nivel 3']);
      Treatment::create(['title' => 'Consolidación Nivel 4']);
      Treatment::create(['title' => 'Consolidación Nivel 5']);
      Treatment::create(['title' => 'Consolidación Suburbana Nivel 1']);
      Treatment::create(['title' => 'Consolidación Suburbana Nivel 2']);
      Treatment::create(['title' => 'Consolidación Suburbana Nivel 3']);
      Treatment::create(['title' => 'Consolidación Suburbana Nivel 4']);
      Treatment::create(['title' => 'Desarrollo en Suelo Expansión']);
      Treatment::create(['title' => 'Desarrollo en Suelo Urbano']);
      Treatment::create(['title' => 'Generación de actividades rurales sostenibles']);
      Treatment::create(['title' => 'Mejoramiento integral']);
      Treatment::create(['title' => 'Mejoramiento Integral Suelo de Expansión']);
      Treatment::create(['title' => 'Mejoramiento Integral en Suelo Urbano']);
      Treatment::create(['title' => 'Renovación Urbana']);
      Treatment::create(['title' => 'Restauración de actividades rurales']);
      Treatment::create(['title' => 'Transición a protección']);
      Treatment::create(['title' => 'No encontrado']);
      Treatment::create(['title' => 'No requiere análisis']);
   }
}
