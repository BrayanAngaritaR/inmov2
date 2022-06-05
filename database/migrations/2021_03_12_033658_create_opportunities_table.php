<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('opportunities', function (Blueprint $table) {
         $table->id();
         $table->string('title');

        //  #######################################
        //  #  Información de Catastro   
        //  #######################################

        //  //Dejar en blanco por ahora

        // // $table->string('cbml_not_found')->nullable(); //CBML no encontrados
        // // //??? Dirección es la misma  que la dirección de Información SSS  
         
        // // $table->double('cadastral_area')->nullable(); //Área catastral (lote)
        // // $table->double('construction_area')->nullable(); //Área construcción
        // // $table->double('use')->nullable(); //Uso
        // // $table->integer('type')->nullable(); //Tipo ??? A qué corresponde? Se relaciona con algo
         
        // // $table->enum('sector', ['Persona natural', 'Sector público', 'Sector privado', 'No aplica'])->nullable(); //Sector

        // // $table->double('appraisal_range')->nullable(); //Rango Avalúo
         
        // // $table->enum('ph_range', ['RPH', 'NPH', 'No encontrado'])->nullable(); //Rango PH

        // // $table->integer('desenglobe_percentage')->nullable(); //Porcentaje Desenglobe  

        // //#######################################
        // // #  Información de grupo TX 
        // // #######################################

        // // $table->boolean('fiscal_plate')->default(false); //Matrículas que se encuentran en la base de datos de SAP bienes fiscales

        // // $table->boolean('public_plate')->default(false); //Matrículas que se encuentran en la base de datos de SAP uso público

        // // #######################################
        // // #  Información de UABI
        // // #######################################

        // // $table->boolean('analysis_in_property_type')->default(false); //Análisis del tipo de bien 
         
        // // $table->boolean('analyzed')->default(false); //Analizada

        //  #######################################
        //  #  Campos adicionales en caso de venta
        //  #######################################

        //  //Área del predio según VUR
        //  $table->double('area_according_to_vur')->default(0); 

        //  //Áreas comunes (extraída de la ficha catastral)
        //  $table->double('common_areas')->default(0); 
         
        //  //Área de Lote Catastral -> Se trae desde el otro campo cadastral_area

                  


        //  //Se ingresa manualmente
        //  $table->double('percentage_of_fc_ownership')->default(0);   //Porcentaje de titularidad del Municipio según el RPH extraido de Ficha Catastral ( sobre m2 Área del lote)
        //  $table->double('ownership_percentage_vur')->default(0);  //Porcentaje de titularidad del Municipio según VUR

        //  //Automático - (porcentaje_de_titularidad/100) 
        //  // $table->double('coefficient_of_vur'); //Coeficiente de titularidad del Municipio según VUR
        //  // //Automático - (porcentaje_de_titularidad/100) (Debe dar menor o igual a 1 y > 0)
        //  // $table->double('coefficient_of_fc'); //Coeficiente de titularidad del Municipio según el RPH extraido de Ficha Catastral ( sobre m2 Área del lote) (Debe dar menor o igual a 1 y > 0)

        //  //##########################
        //  //Fórmulas en el modelo
        //  //##########################

         
        //  //Área efectiva RPH = area_privada_total * coeficiente_de_titularidad_fc.
        //  //Área efectiva NPH (No propiedad horizontal) = area_privada_total * coeficiente_de_titularidad_vur.

        //  //Área de titularidad del municipio = (area_privada_total * coeficiente_de_titularidad_fc * coeficiente_de_titularidad_vur). 


        //  //Valor %Catastral = property_valuation *  porcentaje_de_titularidad_fc.
        //  //Vl M2 Catastral = property_valuation / area_privada_total.
        //  $table->double('geoeconomic_zone_value')->nullable(); //Valor m² zona geoconómica
        //  //Valor total por zonas homogéneas = valor_zona_geoeconomica * area_privada_total.

        //  //Valor de la titularidad del Municipio (% de propiedad) según zonas homogéneas = Área de titularidad del municipio * valor_zona_geoeconomica.
         
        //  //Valor con el descuento 15% del FONPET = Valor de la titularidad del Municipio (% de propiedad) según zonas homogéneas * 0.85.

        //  //Valor sin el descuento 3% comisiòn de CISA y 15% del FONPET = Valor de la titularidad del Municipio (% de propiedad) según zonas homogéneas * 0.82.

        //  //Acción análisis de datos Agencia APP
         
        //  //Destinación (apartamento, cuarto util, garaje, local, sala multiple, oficina)

        //  //Para vender //Si o No
        //  //Observaciones

         $table->timestamps();
      });
   }

   /**
   * Reverse the migrations.
   *
   * @return void
   */
   public function down()
   {
      Schema::dropIfExists('opportunities');
   }
}
