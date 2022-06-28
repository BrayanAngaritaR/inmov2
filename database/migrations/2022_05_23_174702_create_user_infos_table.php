<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('user_infos', function (Blueprint $table) {
         $table->id();
         $table->string('phone')->default('0');
         $table->string('position')->nullable();
         $table->unsignedBigInteger('dependency_id')->default(1);
         $table->foreign('dependency_id')->references('id')->on('dependencies');
         $table->unsignedBigInteger('user_id')->nullable();//Responsable
         $table->foreign('user_id')->references('id')->on('users');
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
      Schema::dropIfExists('user_infos');
   }
}
