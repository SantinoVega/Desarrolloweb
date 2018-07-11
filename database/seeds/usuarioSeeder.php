<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Daniel',
        	'email' => '666@666',
        	'password' => bcrypt('laravel'),
        	//'profession_id' => 1
        ]);
    }
}
