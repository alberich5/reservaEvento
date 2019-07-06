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
        DB::table('users')->insert([
            'name' => 'Marcelo Choque',
            'email' => 'alberto34plus@gmail.com',
            'password' => bcrypt('jarvis'),
            'rol' => 'administrador',
        ]);
    }
}
