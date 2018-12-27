<?php

use Illuminate\Database\Seeder;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participants')->insert([
            'name_first' => 'Yoeri',
            'name_last' => 'op \'t Roodt',
            'email' => 'yoeri.optroodt@gmail.com',
            'lang' => 'nl',
        ]);
    }
}
