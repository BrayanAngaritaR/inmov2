<?php

namespace Database\Seeders;

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
      Opportunity::create(['title' => '-- Sin seleccionar']);
      Opportunity::create(['title' => 'Oportunidad Inmobiliaria']);
      Opportunity::create(['title' => 'Gestión comercial ']);
      Opportunity::create(['title' => 'Otro']);
      Opportunity::create(['title' => 'No requiere análisis']);
   }
}
