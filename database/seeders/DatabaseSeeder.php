<?php

namespace Database\Seeders;

//Models
use App\Models\User;
use App\Models\Property\PropertyType;

//Seeders
use Database\Seeders\ActionSeeder;
use Database\Seeders\CommuneSeeder;
use Database\Seeders\DestinationSeeder;
use Database\Seeders\DistrictSeeder;
use Database\Seeders\FloorClasificationSeeder;
use Database\Seeders\FloorUseSeeder;
use Database\Seeders\MacroProjectSeeder;
use Database\Seeders\NotarySeeder;
use Database\Seeders\OpportunitySeeder;
use Database\Seeders\PolygonSeeder;
use Database\Seeders\SecretaryshipSeeder;
use Database\Seeders\ThirdLevelInstrumentSeeder;
use Database\Seeders\ThreatSeeder;
use Database\Seeders\TreatmentSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    *
    * @return void
    */
   public function run()
   {
      // \App\Models\User::factory(10)->create();

      User::create([
         'name' => 'Brayan Angarita',
         'email' => 'brayanangarita11@gmail.com',
         'password' => bcrypt('password')
      ]);

      $this->call([
         SecretaryshipSeeder::class,
         NotarySeeder::class,
         FloorClasificationSeeder::class,
         MacroProjectSeeder::class,
         TreatmentSeeder::class,
         PolygonSeeder::class,
         ThreatSeeder::class,
         ThirdLevelInstrumentSeeder::class,
         DestinationSeeder::class,
         CommuneSeeder::class,
         DistrictSeeder::class,
         FloorUseSeeder::class,
         OpportunitySeeder::class,
         ActionSeeder::class,
      ]);

      PropertyType::create(['title' => 'Público']);
      PropertyType::create(['title' => 'Fiscal']);
   }
}
