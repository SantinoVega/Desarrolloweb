<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profession;

class profession_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {





        /* ------  SQL LARAVEL
        DB::insert('insert into professions (profession) values (:profession)',["profession"=>"Desarrollador back-end"]);
       
        DB::table('professions')->insert([
            'profession' => 'Desarrollador back-end',
        ]);

        DB::table('professions')->insert([
        	'profession' => 'Desarrollador front-end',
        ]);

        DB::table('professions')->insert([
        	'profession' => 'Diseñador web',
        ]);

        */ 

        // Elocuent ORM Laravel 
        Profession::create([
                'profession' => 'Desarrollador back-end',
        ]);

        Profession::create([
            'profession' => 'Desarrollador front-end',
        ]);

        Profession::create([
            'profession' => 'Diseñador web',
        ]);

        /**
         * 
         Crear registros aleatorios para realizar pruebas
         */
        Factory(Profession::class,17)->create();




    }




}
