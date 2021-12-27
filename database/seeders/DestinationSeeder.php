<?php

namespace Database\Seeders;

use App\Models\Property\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      //Destinación
      Destination::create(['title' => 'Residencial']);
      Destination::create(['title' => 'Comercial']);
      Destination::create(['title' => 'Servicios']);
      Destination::create(['title' => 'Industrial']);
      Destination::create(['title' => 'Espacio público']);
      Destination::create(['title' => 'Equipamientos Básicos Sociales EBS']);
      Destination::create(['title' => 'Equipamientos Básicos Comunitarios EBC']);
      Destination::create(['title' => 'Equipamientos de Seguridad y Convivencia ESC']);
      Destination::create(['title' => 'Equipamientos de Infraestructuras EII ']);
      Destination::create(['title' => 'Equipamientos Institucionales EIN ']);
      Destination::create(['title' => 'Sin uso']);
      Destination::create(['title' => 'No requiere análisis']);
      Destination::create(['title' => 'EBS - Salud']);
      Destination::create(['title' => 'EBS - Recreación y deporte']);
      Destination::create(['title' => 'EBS - Cultura']);
      Destination::create(['title' => 'EBC - Comunitario']);
      Destination::create(['title' => 'EBC - Culto']);
      Destination::create(['title' => 'EBC - Asistencia social']);
      Destination::create(['title' => 'ESC - Fuerza pública']);
      Destination::create(['title' => 'ESC - Administración de Justicia']);
      Destination::create(['title' => 'ESC - Justicia cercana al ciudadano']);
      Destination::create(['title' => 'ESC - Prevención y atención desastres']);
      Destination::create(['title' => 'EII - Prestación servicios públicos']);
      Destination::create(['title' => 'EII - Transporte']);
      Destination::create(['title' => 'EII - Almacenamiento y distribución sector primario']);
      Destination::create(['title' => 'EII - Almacenamiento y distribución combustibles']);
      Destination::create(['title' => 'EII - Sanitarios']);
      Destination::create(['title' => 'EIN - Institución internacional']);
      Destination::create(['title' => 'EIN - Institución nacional']);
      Destination::create(['title' => 'EIN - Institución regional']);
      Destination::create(['title' => 'EIN - Institución metropolitana']);
      Destination::create(['title' => 'EIN - Institución local']);
   }
}
