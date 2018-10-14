<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'date' => '2018-09-04',
            'event_time' => '12:00',
            'title' => 'testEvent',
            'type' => 'beauty',
            'description_nl' => 'Beschrijving Schoonheid',
            'description_en' => 'Description Beauty',
            'price' => '15',
        ]);
        DB::table('events')->insert([
            'date' => '2018-09-04',
            'event_time' => '14:00',
            'title' => 'testEvent',
            'type' => 'relaxation',
            'description_nl' => 'Beschrijving Relaxatie',
            'description_en' => 'Description Relaxation',
            'price' => '15',
        ]);
        DB::table('events')->insert([
            'date' => '2018-09-04',
            'event_time' => '20:30',
            'title' => 'testEvent2',
            'type' => 'divination',
            'description_nl' => 'Beschrijving Divinatie',
            'description_en' => 'Description Divination',
            'price' => '15',
        ]);
    }
}
