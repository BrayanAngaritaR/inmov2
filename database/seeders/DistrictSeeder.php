<?php

namespace Database\Seeders;

use App\Models\Property\Commune;
use App\Models\Property\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      $commune0 = Commune::create([
         'code' => '00',
         'name' => '-- Sin seleccionar',
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

      //Barrios de la comuna 12
      District::create(['commune_id' => $commune12['id'], 'name' => 'Ferrini']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'Calasanz']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'Los Pinos']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'La América']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'La Floresta']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'Santa Lucía']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'El Danubio']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'Campo Alegre']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'Santa Mónica']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'Barrio Cristóbal']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'Simón Bolívar']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'Santa Teresita']);
      District::create(['commune_id' => $commune12['id'], 'name' => 'Calasanz parte alta']);

      //Barrios de la comuna 13
      District::create(['commune_id' => $commune13['id'], 'name' => 'El Pesebre']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'Blanquizal']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'Santa Rosa de Lima']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'Los Alcázares']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'Metropolitano']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'La Pradera']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'Juan XXIII La Quiebra']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'San Javier No. 1']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'San Javier No. 2']);
      District::create(['commune_id' => $commune13['id'], 'name' => '20 de Julio']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'Belencito']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'Betania']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'El Corazón']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'Las Independencias']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'Nuevos Conquistadores']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'El Salado']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'Eduardo Santos']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'Antonio Nariño']);
      District::create(['commune_id' => $commune13['id'], 'name' => 'El Socorro']);

      //Barrios de la comuna 14
      District::create(['commune_id' => $commune14['id'], 'name' => 'Barrio Colombia']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Villa Carlota']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Castropol']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Lalinde']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Las Lomas No. 1']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Las Lomas No. 2']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Altos del Poblado']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'El Tesoro']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Los Naranjos']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Los Balsos No. 1']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Los Balsos No. 2']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'San Lucas']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'El Diamante No. 2']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'El Castillo']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Alejandría']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'La Florida']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'El Poblado']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Manila']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Astorga']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Patio Bonito']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'La Aguacatala']);
      District::create(['commune_id' => $commune14['id'], 'name' => 'Santa María de los Ángeles']);

      //Barrios de la comuna 15
      District::create(['commune_id' => $commune15['id'], 'name' => 'El Rodeo']);
      District::create(['commune_id' => $commune15['id'], 'name' => 'Tenche']);
      District::create(['commune_id' => $commune15['id'], 'name' => 'Trinidad']);
      District::create(['commune_id' => $commune15['id'], 'name' => 'Santa Fé']);
      District::create(['commune_id' => $commune15['id'], 'name' => 'Aeroparque Juan Pablo II']);
      District::create(['commune_id' => $commune15['id'], 'name' => 'Campo Amor']);
      District::create(['commune_id' => $commune15['id'], 'name' => 'Cristo Rey']);
      District::create(['commune_id' => $commune15['id'], 'name' => 'Guayabal']);
      District::create(['commune_id' => $commune15['id'], 'name' => 'La Colina']);

      //Barrios de la comuna 16
      District::create(['commune_id' => $commune16['id'], 'name' => 'Fátima']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Rosales']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Belén']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Granada']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'San Bernardo']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Las Playas']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Diego Echavarría']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'La Mota']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'La Hondonada']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'El Rincón']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Loma de los Bernal']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'La Gloria']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Altavista']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'La Palma']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Los Alpes']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Las Violetas']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Las Mercedes']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Nueva Villa de Aburrá']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Miravalle']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'El Nogal - Los Almendros']);
      District::create(['commune_id' => $commune16['id'], 'name' => 'Centro Nutibara']);

      //Barrios de la comuna 50
      District::create(['commune_id' => $commune50['id'], 'name' => 'La Suiza']);
      District::create(['commune_id' => $commune50['id'], 'name' => 'La Frisolera']);
      District::create(['commune_id' => $commune50['id'], 'name' => 'La Volcana y Guayabal']);
      District::create(['commune_id' => $commune50['id'], 'name' => 'Palmitas']);
      District::create(['commune_id' => $commune50['id'], 'name' => 'La Aldea']);
      District::create(['commune_id' => $commune50['id'], 'name' => 'La Potrera Miserenga']);
      District::create(['commune_id' => $commune50['id'], 'name' => 'La Urquita']);
      District::create(['commune_id' => $commune50['id'], 'name' => 'Suburbano Urquita']);
      District::create(['commune_id' => $commune50['id'], 'name' => 'Suburbano Potrera Miserenga']);
      District::create(['commune_id' => $commune50['id'], 'name' => 'Suburbano La Aldea']);
      District::create(['commune_id' => $commune50['id'], 'name' => 'Suburbano Palmitas']);

      //Barrios de la comuna 60
      District::create(['commune_id' => $commune60['id'], 'name' => 'Cabecera San Cristóbal']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'La Loma']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'La Palma Patio']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Las Playas']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'El Uvito']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Naranjal']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Pajarito']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'La Cuchilla']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'El Llano']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Travesías']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Pedregal Alto']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Pedregal Bajo']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Pajarito']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'El Picacho']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'El Carmelo']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Yolombó']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'San José de la Montaña']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Boquerón']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'La loma Oriental']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Suburbano La Loma']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Suburbano Palma Patio']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Suburbano La Cuchilla']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Suburbano Travesías']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Suburbano El Llano']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Suburbano Pedregal Alto']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Zona de Expansión Eduardo Santos']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Zona de Expansión Altos de Calazans']);
      District::create(['commune_id' => $commune60['id'], 'name' => 'Zona de Expansión Pajarito']);

      //Barrios de la comuna 70
      District::create(['commune_id' => $commune70['id'], 'name' => 'Altavista']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Aguas Frías']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Suburbano La Esperanza']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Suburbano Patio Bonito']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Suburbano San Pablo']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Suburbano Aguas Frías']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Suburbano Altavista']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Suburbano El Corazón']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Suburbano El Manzanillo']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Suburbano Altavista']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Zona de Expansión Altavista']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Zona de Expansión Belén Rincón']);
      District::create(['commune_id' => $commune70['id'], 'name' => 'Zona de Expansión El Noral']);

      //Barrios de la comuna 80
      District::create(['commune_id' => $commune80['id'], 'name' => 'Cabecera San Antonio de Prado']);
      District::create(['commune_id' => $commune80['id'], 'name' => 'El Vergel']);
      District::create(['commune_id' => $commune80['id'], 'name' => 'La Florida']);
      District::create(['commune_id' => $commune80['id'], 'name' => 'Potrerito']);
      District::create(['commune_id' => $commune80['id'], 'name' => 'La Oculta']);
      District::create(['commune_id' => $commune80['id'], 'name' => 'La Verde']);
      District::create(['commune_id' => $commune80['id'], 'name' => 'El Salado']);
      District::create(['commune_id' => $commune80['id'], 'name' => 'El Astillero']);
      District::create(['commune_id' => $commune80['id'], 'name' => 'Yarumalito']);
      District::create(['commune_id' => $commune80['id'], 'name' => 'Suburbano Potrerito']);
      District::create(['commune_id' => $commune80['id'], 'name' => 'Zona de Expansión San Antonio']);

      //Barrios de la comuna 90
      District::create(['commune_id' => $commune90['id'], 'name' => 'El Cerro']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'El Llano']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'El Plan']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Las Palmas']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Media Luna']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Santa Elena Central']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'El Placer']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Piedras Blancas']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Piedras Blancas Represa']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Piedra Gorda']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Barro Blanco']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano El Tesoro']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano El Cerro']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano Piedra Gorda']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano Barro Blanco']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano El Placer']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano Chacaltaya']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano Mirador del Poblado']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano Santa Elena Central']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano El Llano']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano El Plan']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano Matasano 1']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano Matasano 2']);
      District::create(['commune_id' => $commune90['id'], 'name' => 'Suburbano Matasano 3']);
   }
}
