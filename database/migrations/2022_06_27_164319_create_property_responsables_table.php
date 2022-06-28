<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyResponsablesTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('property_responsables', function (Blueprint $table) {
         $table->id();
         $table->unsignedBigInteger('responsable_id')->nullable();//Responsable
         $table->foreign('responsable_id')->references('id')->on('users');

         $table->unsignedBigInteger('property_id')->nullable();//Inmueble
         $table->foreign('property_id')->references('id')->on('properties');
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
      Schema::dropIfExists('property_responsables');
   }
}
