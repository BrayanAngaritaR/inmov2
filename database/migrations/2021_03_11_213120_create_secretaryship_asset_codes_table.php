<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretaryshipAssetCodesTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('secretaryship_asset_codes', function (Blueprint $table) {
         $table->id();
         $table->string('code');
         $table->string('description')->nullable();
         //$table->unsignedBigInteger('secretaryship_id'); 
         //$table->foreign('secretaryship_id')->references('id')->on('secretaryships');
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
      Schema::dropIfExists('secretaryship_asset_codes');
   }
}
