<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();

		for ($i=0; $i < 20; $i++) {
			/* $id_sexo = $faker -> numberBetween(1,3);
			$nombre;
			switch($id_sexo){
				case 1: 
					$nombre = $faker->name('female');
				break;
				case 2: 
					$nombre = $faker->name('male');
				break;
				case 3: 
					$nombre = $faker->name;
				break;
			} */
			DB::table('users')->insert([
			/* 	'id_sexo' => $id_sexo, */
				'name' => $faker->name,
				'email' => $faker->email,
				'password' => bcrypt('secret'),
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
			]);
		}
    }
}

