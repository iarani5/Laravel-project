<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->call('GenerosSeeder');
		$this->call('UsersSeeder');
		$this->call('ConfesionesSeeder');
        // $this->call(UsersTableSeeder::class);
    }
}
