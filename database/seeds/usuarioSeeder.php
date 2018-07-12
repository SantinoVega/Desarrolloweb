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
        //--------  SQL a mano
        //$profesion=DB::select('select id from professions where profession=?',['Desarrollador back-end']);

        //---   SQL LARAVEL
        // $profesion=DB::table('professions')->select('*')->where('profession','=','Desarrollador back-end')->first();

        $profesion=DB::table('professions')
            ->where('profession','Desarrollador back-end')
            ->value('id');

        dump($profesion);


        DB::table('users')->insert([
            'name' => 'DaniBoy',
            'email' => '666@666',
            'password' => bcrypt('laravel'),
            'profession_id' => $profesion,
        ]);
    }
}
