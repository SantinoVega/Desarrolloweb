<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Profession;

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

        //$profesion=DB::table('professions')
        //    ->where('profession','Desarrollador back-end')
        //    ->value('id');

        //dump($profesion);

        $profesion=Profession::where('profession','Desarrollador back-end')
            ->value('id');


        User::create([
            'name' => 'VincentVega',
            'email' => '666@5555',
            'password' => bcrypt('Laravel'),
            'is_admin' => true,
            'profession_id' => $profesion,
        ]);
        

        factory(User::class)->create([ 
            'profession_id'=> '3'
        ]);


        //**    CREA REGISTROS ALEATORIOS...
        factory(User::class)->create([
            'profession_id'=> '2'
            ]);


        factory(User::class)->create([ 
            'profession_id'=> '3'
        ]);

        
        factory(User::class)->create([ 
            'profession_id'=> '2'
        ]);

        factory(User::class,20)->create(
            ['profession_id'=>rand(1,3)]);
        
    }
}