<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//      TODO Toevoegen -> Foto + Beroep
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('job')->nullable();
            $table->integer('rating')->nullable();
            $table->text('review');
            $table->text('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
