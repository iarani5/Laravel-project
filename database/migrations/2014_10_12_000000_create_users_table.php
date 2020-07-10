<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_admin');
            $table->rememberToken();
            $table->timestamps();
        });
		/* Schema::table('users', function (Blueprint $table) {
			$table->integer('id_sexo')->unsigned();
			$table->foreign('id_sexo')->references('id_sexo')->on('sexos')->onDelete('cascade'); 
		}); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
