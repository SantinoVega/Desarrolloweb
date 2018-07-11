<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class profession_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        

        DB::table('professions')->insert([
        	'profession' => 'Desarrollador back-end',
        ]);

        DB::table('professions')->insert([
        	'profession' => 'Desarrollador front-end',
        ]);

        DB::table('professions')->insert([
        	'profession' => 'Diseñador web',
        ]);
    }
}
