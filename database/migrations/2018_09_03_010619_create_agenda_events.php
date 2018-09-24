<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('time');
            $table->text('title');
            $table->text('description_nl');
            $table->text('description_en');
            $table->double('price')->nullable();
            $table->timestamps();
        });
        DB::table('agendas')->insert([
            'date' => '2018-09-04',
            'time' => '12-00',
            'title' => 'testEvent',
            'description_nl' => 'dit is een omschrijving',
            'description_en' => 'cest un description',
            'price' => '15',
        ]); DB::table('agendas')->insert([
            'date' => '2018-09-04',
            'title' => 'testEvent2',
            'description_nl' => 'dit is een omschrijving',
            'description_en' => 'cest un description',
            'price' => '15',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
