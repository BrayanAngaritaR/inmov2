<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertySalesTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('property_sales', function (Blueprint $table) {
         $table->id();

         //Área del predio según VUR
         $table->double('area_according_to_vur')->default(0); 

         //Áreas comunes (extraída de la ficha catastral)
         $table->double('common_areas')->default(0); 
 
         //Porcentaje de titularidad del Municipio según el RPH extraído de Ficha Catastral ( sobre m2 Área del lote)
         $table->double('percentage_of_fc_ownership')->default(0);   

         //Porcentaje de titularidad del Municipio según VUR
         $table->double('ownership_percentage_vur')->default(0);  

         //Valor m² zona geoconómica
         $table->double('geoeconomic_zone_value')->default(0);

         $table->unsignedBigInteger('property_id')->nullable();
         $table->foreign('property_id')->references('id')->on('properties'); 

         //Destinación
         $table->string('for_sale_destination')->default('Otro');

         //Acción Agencia APP
         $table->string('for_sale_action')->default('Sin acción');

         //¿Para vender?
         $table->boolean('for_sale')->default(true);

         //Observaciones
         $table->text('for_sale_observations')->nullable();
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
      Schema::dropIfExists('property_sales');
   }
}
