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
            'event_time' => '12:00:00',
            'title' => 'testEvent',
            'description_nl' => 'Als dochter van ouders met een vroegere achtergrond in de clerus, kwam Petra al jong de tegenstellingen in georganiseerde religie en meer holistische denkbeelden tegen. Haar ouders zetten zich ook als eerste(n) in een kleine dorpsgemeenschap ook in naar sociaal onrecht, haar moeder was erg creatief van natuur en haar vader had een goedlachs standvastig karakter, waar zijn liefde voor het leven zich voornamelijk uitte in de genegenheid hij voor zijn vrouw en dochter koesterde.

Dat haar ouders hun kerkelijk ambt aan de haak hingen en voor een gezin kozen, zorgde wel altijd voor wat deining in de dorpsgemeenschap en Petra kreeg met veelvuldige pesterijen rond dit stigma te maken. Het maakt',
            'description_en' => 'cest un description',
            'price' => '15',
        ]); DB::table('events')->insert([
        'date' => '2018-09-04',
        'title' => 'testEvent2',
        'description_nl' => 'dit is een omschrijving',
        'description_en' => 'cest un description',
        'price' => '15',
    ]);
    }
}
