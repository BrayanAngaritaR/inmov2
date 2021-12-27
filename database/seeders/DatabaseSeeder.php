<?php

namespace Database\Seeders;

use App\Models\Property\Action;
use App\Models\Property\Commune;
use App\Models\Property\Destination;
use App\Models\Property\District;
use App\Models\Property\FloorUse;
use App\Models\Property\Opportunity;
use App\Models\Property\PropertyType;
use App\Models\User;
use Database\Seeders\DestinationSeeder;
use Database\Seeders\FloorClasificationSeeder;
use Database\Seeders\MacroProjectSeeder;
use Database\Seeders\NotarySeeder;
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
      ]);

      PropertyType::create(['title' => 'Público']);
      PropertyType::create(['title' => 'Fiscal']);

      $commune1 = Commune::create([
         'code' => '1',
         'name' => 'Popular',
      ]);

      $commune2 = Commune::create([
         'code' => '2',
         'name' => 'Santa Cruz',
      ]);

      $commune3 = Commune::create([
         'code' => '3',
         'name' => 'Manrique',
      ]);

      $commune4 = Commune::create([
         'code' => '4',
         'name' => 'Aranjuez',
      ]);

      $commune5 = Commune::create([
         'code' => '5',
         'name' => 'Castilla',
      ]);

      $commune6 = Commune::create([
         'code' => '6',
         'name' => 'Doce de octubre',
      ]);

      $commune7 = Commune::create([
         'code' => '7',
         'name' => 'Robledo',
      ]);

      $commune8 = Commune::create([
         'code' => '8',
         'name' => 'Villa Hermosa',
      ]);

      $commune9 = Commune::create([
         'code' => '9',
         'name' => 'Buenos Aires',
      ]);

      $commune10 = Commune::create([
         'code' => '10',
         'name' => 'La Candelaria',
      ]);

      $commune11 = Commune::create([
         'code' => '11',
         'name' => 'Laureles Estadio',
      ]);

      $commune12 = Commune::create([
         'code' => '12',
         'name' => 'La América',
      ]);

      $commune13 = Commune::create([
         'code' => '13',
         'name' => 'San Javier',
      ]);

      $commune14 = Commune::create([
         'code' => '14',
         'name' => 'Poblado',
      ]);

      $commune15 = Commune::create([
         'code' => '15',
         'name' => 'Guayabal',
      ]);

      $commune16 = Commune::create([
         'code' => '16',
         'name' => 'Belén',
      ]);

      $commune50 = Commune::create([
         'code' => '50',
         'name' => 'Palmitas',
      ]);

      $commune60 = Commune::create([
         'code' => '60',
         'name' => 'San Cristóbal',
      ]);

      $commune70 = Commune::create([
         'code' => '70',
         'name' => 'Altavista',
      ]);

      $commune80 = Commune::create([
         'code' => '80',
         'name' => 'San Antonio de Prado',
      ]);

      $commune90 = Commune::create([
         'code' => '90',
         'name' => 'Santa Elena',
      ]); 
      

      District::create(['commune_id' => $commune10['id'], 'name' => 'Estación Villa']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Estación Villa']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'San Benito']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Las Palmas']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'San Diego']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Jesús Nazareno']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'San Miguel']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'Versalles No.1']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Área de Expansión Altavista']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'San Pedro']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'La Esperanza']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'Picacho']);


      

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

      //Oportunidad
      Opportunity::create(['title' => 'Oportunidad Inmobiliaria']);
      Opportunity::create(['title' => 'Gestión comercial ']);
      Opportunity::create(['title' => 'Otro']);
      Opportunity::create(['title' => 'No requiere análisis']);

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
