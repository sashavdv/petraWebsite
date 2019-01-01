<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public static function getMonthlyEvents() {
        $now = Carbon::now();

        $aExploded = explode('-', $now->toDateString());

        $aEvents = Event::get();

        $aNextEvents = array();

        foreach ($aEvents as $oEvent) {
            $aExplodedEventDate = explode('-', $oEvent->date);
            if ($aExplodedEventDate[0] . $aExplodedEventDate[1] == $aExploded[0] . $aExploded[1] ) {

                array_push($aNextEvents, $oEvent);
            }
        }

        return $aNextEvents;
    }

    public static function getTodaysEvents() {
        $now = Carbon::today()->toDateString();

        $aEvents = self::where('date', $now)->get();

        return $aEvents;
    }
}
