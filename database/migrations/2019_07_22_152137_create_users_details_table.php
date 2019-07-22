<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('users_details', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->bigInteger('users_id')->unsigned();
           $table->char('name',50);
           $table->char('surname',50);
           $table->char('address',100);
           $table->string('path');
           $table->timestamps();

           $table->foreign('users_id')->references('id')->on('users');
       });
     }

     public function down()
     {
         Schema::dropForeign('users_details_users_id_foreign');
         Schema::dropIfExists('users_details');
     }
 }
