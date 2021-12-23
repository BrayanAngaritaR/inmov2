<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoRequestsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('info_requests', function (Blueprint $table) {
         $table->id();
         $table->unsignedBigInteger('user_id')->nullable();
         $table->foreign('user_id')->references('id')->on('users');

         $table->unsignedBigInteger('property_id')->nullable();
         $table->foreign('property_id')->references('id')->on('properties');

         $table->string('type')->default('Solicitud de información');
         $table->json('info');
         $table->string('status')->default('Pending');
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
      Schema::dropIfExists('info_requests');
   }
}
