<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AgendaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
            'date' => Carbon::create(2018, 05, 10, 15, 30),
            'description' => 'test',
        ]);
        DB::table('agendas')->insert([
            'date' => Carbon::create(2018, 05, 26, 15, 30),
            'description' => 'test',
        ]);
        DB::table('agendas')->insert([
            'date' => Carbon::create(2018, 05, 23, 15, 30),
            'description' => 'test',
        ]);
    }
}
