<?php

use Illuminate\Database\Seeder;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('generos')->delete();
		$genero=array("+18","triste","gracioso","escatologico","vergonzoso",'liberador');
		for ($i=0; $i < 6; $i++) {
			DB::table('generos')->insert([
				'genero' => $genero[$i],
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
			]);
		}
    }
}
