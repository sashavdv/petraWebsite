<?php


use App\Participants;
use Illuminate\Http\Request;


function sendUpdate() {
    $aMailList = Participants::get();
}
