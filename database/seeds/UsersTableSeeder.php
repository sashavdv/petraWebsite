<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Yoeri op\'t Roodt',
            'email' => 'yoeri.optroodt@gmail.com',
            'password' => bcrypt('yoeri'),
        ]);
        DB::table('users')->insert([
            'name' => 'Sasha van de Voorde',
            'email' => 'sashavandevoorde@gmail.com',
            'password' => bcrypt('sasha'),
        ]);
    }
}
