<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ReviewsTableSeeder::class,
            EventsTableSeeder::class,
            ParticipantsTableSeeder::class,
            MailTemplatesTableSeeder::class,
        ]);
    }
}
