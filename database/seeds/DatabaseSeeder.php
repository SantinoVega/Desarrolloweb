<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	//dd(ProfessionSeeder::class);  // 
        // $this->call(UsersTableSeeder::class);

        $this->truncateTables(
            [
                'professions',
                'users'
            ]);

        $this->call(profession_seeder::class);
        $this->call(usuarioSeeder::class);

    }

    public function truncateTables(array $tables)
    {
        DB::statement('set foreign_key_checks=0;');

        foreach ($tables as $table) {
             DB::table($table)->truncate();
        }

        DB::statement('set foreign_key_checks=1;');
    }
}
