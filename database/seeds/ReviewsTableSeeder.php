<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'name' => 'Sammy Heeren',
            'rating' => 4,
            'review' => 'Als 44 jarige man en al reeds 20 jaar samenwerkend in het bedrijf van mijn ouders kreeg ik dikwijls periodes in mijn leven dat ik het moeilijk had met bepaalde dingen. Na vele zoektochten naar mezelf kwam ik bij Petra Stienaers. Vanaf de dag dat Petra mij coachte en mij liet inzien dat het leven er ook anders kon uit zien is er voor mij een prachtige wereld open gegaan. Door haar enorme bagage en haar fantastische ziel liet ze mij spiegels zien die serieus hard aankomen waardoor je die dingen anders gaat bekijken. Ik ben dankbaar dat ik Petra heb mag leren kennen, ik heb het zelf gedaan maar dit was nooit gelukt zonder deze prachtige, warme vrouw. Hartegroet Sammy',
        ]);

        DB::table('reviews')->insert([
            'title' => 'Hartverwarmednde bezoeken',
            'name' => 'Eric Waitykawa Theunis',
            'rating' => 5,
            'review' => 'Het zijn steeds hartverwarmende chakrawandelingen met telkens een duidelijke en toegankelijke doe activiteit over een bepaalde chakra telkens op een super mooie locatie, proficiat Petra voor de organisatie en energie die je hier insteekt in licht en liefde Namasté Eric.',
        ]);

        DB::table('reviews')->insert([
            'name' => 'Mieke Augusti en Theo Gubbels',
            'review' => 'Hartelijk dank voor de fijne uren. Het wandelen in de natuur, de oefeningen, de hapjes, het gezelschap van mensen op dezelfde golflengte deed ons deugd. Wij wensen je verder succes met coaching. We kunnen je van harte aanbevelen. Augusti Mieke en Gubbels Theo',
        ]);
    }
}
