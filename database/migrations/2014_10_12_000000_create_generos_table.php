<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerosTable extends Migration
{
    public function up()
    {
        Schema::create('generos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('genero');

/*             $table->rememberToken();
 */            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('generos');
    }
}
