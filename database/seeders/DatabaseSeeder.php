<?php

namespace Database\Seeders;

//Models
use App\Models\Property\PropertyType;
use App\Models\User;
use App\Models\User\Dependency;
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
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    *
    * @return void
    */
   public function run()
   {
      /*
      |--------------------------------------------------------------------------
      | Usuarios
      |--------------------------------------------------------------------------
      */

      #Administrador
      $Brayan = User::create([
         'name' => 'Brayan Angarita',
         'email' => 'brayanangarita11@gmail.com',
         'password' => bcrypt('password')
      ]);

      #Colaboradores
      $Santiago = User::create([
         'name' => 'Santiago Castro Hernández',
         'email' => 'santiago.castro@app.gov.co',
         'password' => bcrypt('santiago.castro')
      ]);

      $Natacha = User::create([
         'name' => 'Natacha Gómez Hoyos',
         'email' => 'natacha.gomez@app.gov.co',
         'password' => bcrypt('natacha.gomez')
      ]);

      $Stefania = User::create([
         'name' => 'Stefanía Osorio Elejalde',
         'email' => 'stefania.osorio@app.gov.co',
         'password' => bcrypt('stefania.osorio')
      ]);

      $Tatiana = User::create([
         'name' => 'Tatiana de los Ríos Gaviria',
         'email' => 'tatiana.delosrios@app.gov.co',
         'password' => bcrypt('tatiana.delosrios')
      ]);

      $Andres = User::create([
         'name' => 'Andrés Moreno',
         'email' => 'andres.moreno@app.gov.co',
         'password' => '$2y$10$czW4qQklRLCNLHkdUf8D.uUzKYOa4U2lBRPXmkMkYy5pfrui8kNaK',
         'created_at' => '2022-01-25 20:15:22'
      ]);

      $Valentina = User::create([
         'name' => 'Valentina Palacios Arias',
         'email' => 'valentina.palacios@app.gov.co',
         'password' => '$2y$10$1TV78mO96jBlR30fZxdKiO1s0za3bErLN0lM4gQMfZNPu9AumTkrS',
         'created_at' => '2022-01-25 20:21:22'
      ]);

      $Yaneth = User::create([
         'name' => 'Yaneth Aguirre',
         'email' => 'yaneth.aguirre@app.gov.co',
         'password' => '$2y$10$KilT9VVtcCKFK0LPaglafuGcqiDF96iDnnW2mXE.RdZdsQqK4RSkG',
         'created_at' => '2022-01-25 20:21:22'
      ]);

      $Camila = User::create([
         'name' => 'Maria Camila García Ortega',
         'email' => 'camila.garcia@app.gov.co',
         'password' => '$2y$10$MbqejCKMyT.tvq5uwLyTN.oj4Lr1bP.HNxJFCbOZL3SO2ZU5zZK8y',
         'created_at' => '2022-01-26 02:12:45'
      ]);

      $sara = User::create([
         'name' => 'Sara Mendoza',
         'email' => 'saramendoza.fl@gmail.com',
         'password' => '$2y$10$C7U17U1zHYSJW.oY26tOnunorRnsEj1bhh4mFgvC8J1eM4xo1JE56',
         'created_at' => '2022-02-16 01:09:46'
      ]);

      $scastroh = User::create([
         'name' => 'Santiago',
         'email' => 'scastroh@unal.edu.co',
         'password' => '$2y$10$GPS1SvbLOb.tCcKUDUCdcOCEllnorcRG2geHkBcHJ/YWHMyZW9pPW',
         'created_at' => '2022-02-16 01:09:46'
      ]);

      /*
      |--------------------------------------------------------------------------
      | Dependencias
      |--------------------------------------------------------------------------
      */

      $default_dependency = Dependency::create([
         'title' => 'Sin dependencia',
         'slug' => 'sin-dependencia'
      ]);

      Dependency::create([
         'title' => 'AGENCIA APP',
         'slug' => 'agencia-app'
      ]);

      /*
      |--------------------------------------------------------------------------
      | Roles
      |--------------------------------------------------------------------------
      */

      $administrator = Role::create(['name' => 'Admin']);
      $collaborator = Role::create(['name' => 'Collaborator']);
      $auditor = Role::create(['name' => 'Auditor']);
      $supervisor = Role::create(['name' => 'Supervisor']);
      $editor = Role::create(['name' => 'Editor']);

      $Brayan->assignRole($administrator);
      $Santiago->assignRole($collaborator);
      $Natacha->assignRole($collaborator);
      $Stefania->assignRole($collaborator);
      $Tatiana->assignRole($collaborator);
      $Valentina->assignRole($collaborator);

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
         DistrictSeeder::class,
         FloorUseSeeder::class,
         OpportunitySeeder::class,
      ]);

      PropertyType::create(['title' => 'Público']);
      PropertyType::create(['title' => 'Fiscal']);

      $path = public_path('sql/demo.sql'); 
      $sql = file_get_contents($path); 
      \DB::unprepared($sql); 
   }
}
