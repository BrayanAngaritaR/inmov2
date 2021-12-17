<?php

namespace Database\Seeders;

use App\Models\Property\Secretaryship;
use App\Models\Property\SecretaryshipAssetCode;
use Illuminate\Database\Seeder;

class SecretaryshipSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      Secretaryship::create(['title' => 'Secretaría de hacienda']);

      SecretaryshipAssetCode::create([
         'code' => 'BZ',
         'description' => 'Bienes Fiscales'
      ]);

// Secretaría de Cultura Ciudadana
// Secretaría de Desarrollo Social - Participación Ciudadana
// Secretaría de Desarrollo Económico
// Secretaria de Educación
// Equipamiento Recreativo
// Fondo Local de Salud- Secretaría de Salud
// Secretaría General
// Secretaría de Gobierno
// Secretaría de Medio Ambiente
// Secretaria de Obras Públicas- Infraestructura Física
// Secretaría de Servicios Administrativos - Suministros y Servicios
// Secretaría de  la Mujer
// Secretaría de Transito -Movilidad

      SecretaryshipAssetCode::create([
         'code' => 'IZ',
         'description' => 'Secretaría de Bienestar Social - Secretaría de Inclusión Social',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'CBZ',
         'description' => 'CORVIDE - Bienes Fiscales',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'CUZ',
         'description' => 'CORVIDE - Bienes Fiscales',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'DZ',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'ZDE',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'EDZ',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'EQZ',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'FLZ',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'GEZ',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'GOZ',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'MZ',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'OZ',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'SZ',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'SMZ',
      ]);

      SecretaryshipAssetCode::create([
         'code' => 'TZ',
      ]);

      Secretaryship::create(['title' => 'Secretaría general']);
      Secretaryship::create(['title' => 'Secretaría de gestión humana y servicio a la ciudadanía ']);
      Secretaryship::create(['title' => 'Secretaría de suministros y servicios']);
      Secretaryship::create(['title' => 'Secretaría de educación']);
      Secretaryship::create(['title' => 'Secretaría de participación ciudadana']);
      Secretaryship::create(['title' => 'Secretaría de cultura ciudadana']);
      Secretaryship::create(['title' => 'Secretaría de salud']);
      Secretaryship::create(['title' => 'Secretaría de inclusión social, familia y derechos humanos']);
      Secretaryship::create(['title' => 'Secretaría de las mujeres']);
      Secretaryship::create(['title' => 'Secretaría de la juventud']);
      Secretaryship::create(['title' => 'Secretaría de seguridad y convivencia']);
      Secretaryship::create(['title' => 'Departamento administrativo de gestión del riesgo de desastres']);
      Secretaryship::create(['title' => 'Secretaría de infraestructura física ']);
      Secretaryship::create(['title' => 'Secretaría de medio ambiente']);
      Secretaryship::create(['title' => 'Secretaría de movilidad ']);
      Secretaryship::create(['title' => 'Secretaría de desarrollo económico']);
      Secretaryship::create(['title' => 'Departamento administrativo de planeación']);
      Secretaryship::create(['title' => 'Secretaría de gestión y control territorial']);
      Secretaryship::create(['title' => 'Fondo de valorización del Municipio de Medellín –Fonvalmed–']);
      Secretaryship::create(['title' => 'Administrador del Patrimonio escondido de empresas varias de Medellín – APEV']);
      Secretaryship::create(['title' => 'Colegio Mayor de Antioquia']);
      Secretaryship::create(['title' => 'Instituto Tecnológico Pascual Bravo']);
      Secretaryship::create(['title' => 'Instituto Tecnológico Metropolitano –ITM–']);
      Secretaryship::create(['title' => 'Instituto de deportes y recreación de Medellín –INDER–']);
      Secretaryship::create(['title' => 'Biblioteca Pública Piloto']);
      Secretaryship::create(['title' => 'Agencia para la Educación Superior –SAPIENCIA–']);
      Secretaryship::create(['title' => 'Hospital General de Medellín -E.S.E-']);
      Secretaryship::create(['title' => 'Metrosalud -E.S.E']);
      Secretaryship::create(['title' => 'Instituto social de vivienda y hábitat de Medellín –Isvimed–']);
      Secretaryship::create(['title' => 'Aeropuerto Enrique Olaya Herrera']);
      Secretaryship::create(['title' => 'Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público – Privadas']);
      Secretaryship::create(['title' => 'Metroparques']);
      Secretaryship::create(['title' => 'Empresa para la seguridad urbana –ESU–']);
      Secretaryship::create(['title' => 'Empresa de desarrollo urbano –EDU– ']);
      Secretaryship::create(['title' => 'Empresa de transporte masivo del Valle de Aburrá Ltda. –Metromed–']);
      Secretaryship::create(['title' => 'Empresas Públicas de Medellín E.S.P.-EPM-']);
      Secretaryship::create(['title' => 'Savia Salud E.P.S.']);
      Secretaryship::create(['title' => 'Plaza Mayor Medellín Convenciones y Exposiciones']);
      Secretaryship::create(['title' => 'Metroplús S.A.']);
      Secretaryship::create(['title' => 'Terminales de Transporte de Medellín S.A.']);
      Secretaryship::create(['title' => 'Fundación Ferrocarril de Antioquia']);
      Secretaryship::create(['title' => 'Parque Explora ']);
      Secretaryship::create(['title' => 'Corporación Hospital Infantil Concejo de Medellín ']);
      Secretaryship::create(['title' => 'Corporación Cuenca Verde']);
      Secretaryship::create(['title' => 'Corporación Parque Arví']);
      Secretaryship::create(['title' => 'Fundación Jardín Botánico “Joaquín Antonio Uribe”']);
      Secretaryship::create(['title' => 'Agencia de Cooperación e Inversión de Medellín y el Área Metropolitana -ACI-']);
      Secretaryship::create(['title' => 'Ruta N ']);
      Secretaryship::create(['title' => 'Telemedellín']);
      Secretaryship::create(['title' => 'Incubadora de Empresas -Créame-']);
      Secretaryship::create(['title' => 'Teleantioquia']);
      Secretaryship::create(['title' => 'Fondo de Garantías de Antioquia']);
      Secretaryship::create(['title' => 'Fundación Medellín Convention & Visitors Burea']);
      Secretaryship::create(['title' => 'Gerencia de Corregimientos ']);
      Secretaryship::create(['title' => 'Gerencia del Centro']);
      Secretaryship::create(['title' => 'Gerencia de Movilidad Humana']);
      Secretaryship::create(['title' => 'Otra']);
   }
}
