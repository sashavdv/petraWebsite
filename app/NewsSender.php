<?php


use App\Participants;
use Illuminate\Http\Request;


function sendUpdate() {
    Participants::insert([
        'name_first' => 'cronjob',
        'name_last' => 'test',
        'email' => 'cronjob.test',
        'lang' => 'nl',
    ]);
}
