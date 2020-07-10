<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfesionesTable extends Migration
{
    public function up()
    {
        Schema::create('confesiones', function (Blueprint $table) {
            $table->increments('id_confesiones');
            $table->string('TITULO');
            $table->string('CONFESION')->unique();
            $table->dateTime('FECHA_CREACION');
            $table->rememberToken();
            $table->timestamps();
        });
		 Schema::table('confesiones', function (Blueprint $table) {
			$table->integer('id_usuario')->unsigned();
			$table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade'); 
		}); 
		
		 Schema::table('confesiones', function (Blueprint $table) {
			$table->integer('id_genero')->unsigned();
			$table->foreign('id_genero')->references('id')->on('generos')->onDelete('cascade'); 
		}); 
    }
 
    public function down()
    {
        Schema::drop('confesiones');
    }
}
