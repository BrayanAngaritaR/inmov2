<?php

namespace Database\Seeders;

use App\Models\Property\FloorUse;
use Illuminate\Database\Seeder;

class FloorUseSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      FloorUse::create(['title' => '-- Sin seleccionar']);
      FloorUse::create(['title' => 'Espacio Público Existente']);
      FloorUse::create(['title' => 'Espacio Público Proyectado']);
      FloorUse::create(['title' => 'Dotacional']);
      FloorUse::create(['title' => 'Áreas de baja mixtura']);
      FloorUse::create(['title' => 'Áreas y corredores de media mixtura']);
      FloorUse::create(['title' => 'Áreas y corredores de alta mixtura']);
      FloorUse::create(['title' => 'Mixto Urbano Rural']);
      FloorUse::create(['title' => 'Forestal Protector']);
      FloorUse::create(['title' => 'Forestal Productor']);
      FloorUse::create(['title' => 'Agrícola']);
      FloorUse::create(['title' => 'Agroforestal']);
      FloorUse::create(['title' => 'Agropecuario']);
      FloorUse::create(['title' => 'Áreas Mineras en Transición']);
      FloorUse::create(['title' => 'No encontrado']);
      FloorUse::create(['title' => 'No requiere análisis']);
      FloorUse::create(['title' => 'Dotacional y de servicios']);
      FloorUse::create(['title' => 'Servicios e industria']);
      FloorUse::create(['title' => 'No aplica']);
   }
}
