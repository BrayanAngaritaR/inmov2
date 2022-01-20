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

      $commune0 = Commune::create([
         'code' => '00',
         'name' => 'Sin seleccionar',
      ]);

      $commune1 = Commune::create([
         'code' => '01',
         'name' => 'Popular',
      ]);

      $commune2 = Commune::create([
         'code' => '02',
         'name' => 'Santa Cruz',
      ]);

      $commune3 = Commune::create([
         'code' => '03',
         'name' => 'Manrique',
      ]);

      $commune4 = Commune::create([
         'code' => '04',
         'name' => 'Aranjuez',
      ]);

      $commune5 = Commune::create([
         'code' => '05',
         'name' => 'Castilla',
      ]);

      $commune6 = Commune::create([
         'code' => '06',
         'name' => 'Doce de octubre',
      ]);

      $commune7 = Commune::create([
         'code' => '07',
         'name' => 'Robledo',
      ]);

      $commune8 = Commune::create([
         'code' => '08',
         'name' => 'Villa Hermosa',
      ]);

      $commune9 = Commune::create([
         'code' => '09',
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
      
      //Barrio por defecto
      District::create(['commune_id' => $commune0['id'], 'name' => '-- Sin seleccionar']);

      //Barrios de la comuna 1
      District::create(['commune_id' => $commune1['id'], 'name' => 'Santo Domingo Savio No. 1']);
      District::create(['commune_id' => $commune1['id'], 'name' => 'Santo Domingo Savio No. 2']);
      District::create(['commune_id' => $commune1['id'], 'name' => 'Popular']);
      District::create(['commune_id' => $commune1['id'], 'name' => 'Granizal']);
      District::create(['commune_id' => $commune1['id'], 'name' => 'Moscú No. 2']);
      District::create(['commune_id' => $commune1['id'], 'name' => 'Villa Guadalupe']);
      District::create(['commune_id' => $commune1['id'], 'name' => 'San Pablo']);
      District::create(['commune_id' => $commune1['id'], 'name' => 'El Compromiso']);
      District::create(['commune_id' => $commune1['id'], 'name' => 'Aldea Pablo VI']);
      District::create(['commune_id' => $commune1['id'], 'name' => 'La Esperanza No. 2']);
      District::create(['commune_id' => $commune1['id'], 'name' => 'La Avanzada']);
      District::create(['commune_id' => $commune1['id'], 'name' => 'Carpinelo']);
      District::create(['commune_id' => $commune1['id'], 'name' => '']);

      //Barrios de la comuna 2
      District::create(['commune_id' => $commune2['id'], 'name' => 'La Isla']);
      District::create(['commune_id' => $commune2['id'], 'name' => 'Playón de los comuneros']);
      District::create(['commune_id' => $commune2['id'], 'name' => 'Pablo VI']);
      District::create(['commune_id' => $commune2['id'], 'name' => 'La Frontera']);
      District::create(['commune_id' => $commune2['id'], 'name' => 'La Francia']);
      District::create(['commune_id' => $commune2['id'], 'name' => 'Andalucía']);
      District::create(['commune_id' => $commune2['id'], 'name' => 'Villa del Socorro']);
      District::create(['commune_id' => $commune2['id'], 'name' => 'Moscú No. 1']);
      District::create(['commune_id' => $commune2['id'], 'name' => 'Santa Cruz']);
      District::create(['commune_id' => $commune2['id'], 'name' => 'Villa hermosa']);
      District::create(['commune_id' => $commune2['id'], 'name' => 'La Rosa']);

      //Barrios de la comuna 3
      District::create(['commune_id' => $commune3['id'], 'name' => 'La Salle']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'Las Granjas']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'Campo Valdés No. 2']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'Santa Inés']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'El Raizal']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'El Pomar']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'Manrique Central No. 2']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'Manrique Oriental']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'Versalles No. 1']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'Versalles No. 2']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'La Cruz']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'Oriente']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'Maria Cano Carambolas']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'San José de la cima No. 1']);
      District::create(['commune_id' => $commune3['id'], 'name' => 'San José de la cima No. 2']);

      //Barrios de la comuna 4
      District::create(['commune_id' => $commune4['id'], 'name' => 'Berlín']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Palermo']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Bermejal Los Álamos']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Moravia']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Universidad de Antioquia']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Sevilla']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'San Pedro']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Manrique Central No. 1']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Campo Valdés No. 1']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Las Esmeraldas']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'La Pinuela']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Aranjuez']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Brasilia']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Miranda']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Jardín Botánico']);
      District::create(['commune_id' => $commune4['id'], 'name' => 'Parque Norte']);

      //Barrios de la comuna 5
      District::create(['commune_id' => $commune5['id'], 'name' => 'Toscana']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Las Brisas']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Florencia']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Tejelo']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Boyacá']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Plaza de Ferias']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Hector Abad Gómez']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Belalcazar']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Girardot']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Tricentenario']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Castilla']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Oleoducto']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Francisco Antonio Zea']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Alfonso López']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Cementerio Universal']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Terminal de Transporte']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Caribe']);
      District::create(['commune_id' => $commune5['id'], 'name' => 'Progreso']);

      //Barrios de la comuna 6
      District::create(['commune_id' => $commune6['id'], 'name' => 'Santander']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'Doce de Octubre No. 1']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'Doce de Octubre No. 2']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'Pedregal']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'La Esperanza']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'San Martín de Porres']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'Kennedy']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'Picacho']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'Picachito']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'Mirador del doce']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'El Progreso No. 2']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'El Triunfo']);

      //Barrios de la comuna 7
      District::create(['commune_id' => $commune7['id'], 'name' => 'Universidad Nacional']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Cerro Volador']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'San Germán']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Liceo Universidad de Antioquia']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Facultad de Minas']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'La Pilarica']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Bosques de San Pablo']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Altamira']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Córdoba']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'López de Mesa']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'El Diamante']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Aures No. 1']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Aures No. 2']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Bello Horizonte']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Villa Flora']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Palenque']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Robledo']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Cucaracho']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Fuente Clara']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Santa Margarita']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Olaya Herrera']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Pajarito']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Monteclaro']);
      District::create(['commune_id' => $commune7['id'], 'name' => 'Nueva Villa de la Iguana']);

      //Barrios de la comuna 8
      District::create(['commune_id' => $commune8['id'], 'name' => 'Villa Hermosa']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'La Mansión']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'San Miguel']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'La Ladera']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'Batallón Girardot']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'Llanaditas']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'Los Mangos']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'Enciso']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'Sucre']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'El Pinal']);
      District::create(['commune_id' => $commune8['id'], 'name' => '13 de Noviembre']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'La Libertad']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'Villatina']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'San Antonio']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'Las Estancias']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'Villa Turbay']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'La Sierra']);
      District::create(['commune_id' => $commune8['id'], 'name' => 'Villa Lilliam']);

      //Barrios de la comuna 9
      District::create(['commune_id' => $commune9['id'], 'name' => 'Juan Pablo II']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Barrio de Jesús']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Bomboná No. 2']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Los Cerros el Vergel']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Alejandro Echavarría']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Barrio Caicedo']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Buenos Aires']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Miraflores']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Cataluna']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'La Milagrosa']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Gerona']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'El Salvador']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Loreto']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Asomadera No. 1']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Asomadera No. 2']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Asomadera No. 3']);
      District::create(['commune_id' => $commune9['id'], 'name' => 'Ocho de Marzo']);

      //Barrios de la comuna 10
      District::create(['commune_id' => $commune10['id'], 'name' => 'Prado']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Hospital San Vicente de Paúl']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'El Chagualo']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Guayabal']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Corazón de Jesús']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'La Alpujarra']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Centro Admtivo']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Calle Nueva']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Perpetuo Socorro']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Barrio Colón']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Bomboná No. 1']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Boston']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Los Ángeles']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'La Candelaria']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Villa Nueva']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Estación Villa']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'San Benito']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Las Palmas']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'San Diego']);
      District::create(['commune_id' => $commune10['id'], 'name' => 'Jesús Nazareno']);

      //Barrios de la comuna 11
      District::create(['commune_id' => $commune11['id'], 'name' => 'Carlos Eugenio Restrepo']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'Suramericana']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'Naranjal']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'San Joaquín']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'Los Conquistadores']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'U.P.B']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'Bolivariana']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'Laureles']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'Las Acacias']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'La Castellana']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'Lorena']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'El Velódromo']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'El Estadio']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'Los Colores']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'Cuarta Brigada']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'Unidad Deportiva Atanasio Girardot']);
      District::create(['commune_id' => $commune11['id'], 'name' => 'Florida Nueva']);


      District::create(['commune_id' => $commune70['id'], 'name' => 'Área de Expansión Altavista']);
      
      District::create(['commune_id' => $commune6['id'], 'name' => 'La Esperanza']);
      District::create(['commune_id' => $commune6['id'], 'name' => 'Picacho']);


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

      //Oportunidad
      Opportunity::create(['title' => '-- Sin seleccionar']);
      Opportunity::create(['title' => 'Oportunidad Inmobiliaria']);
      Opportunity::create(['title' => 'Gestión comercial ']);
      Opportunity::create(['title' => 'Otro']);
      Opportunity::create(['title' => 'No requiere análisis']);

      Action::create(['title' => '-- Sin seleccionar']);
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
