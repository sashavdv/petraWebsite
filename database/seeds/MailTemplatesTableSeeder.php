<?php

use Illuminate\Database\Seeder;

class MailTemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mail_templates')->insert([
            'mail_head' => 'head example',
            'mail_foot' => 'foot example',
        ]);
    }
}
