<?php

namespace App\Helpers;

use Carbon\Carbon;

class Helper
{
    // public static function getAge($birth_date = '')
    // {
    //     try {
    //         $dob = Carbon::parse($birth_date);

    //         // Future birthdate ko invalid consider kare
    //         if ($dob->isFuture()) {
    //             return "Could Not Parse";
    //         }

    //         return $dob->diff(Carbon::now())->format('%y year, %m month and %d days');
    //     } catch(\Exception $d) {
    //         return "Could Not Parse";
    //     }
    // }

    public static function getAge($birth_date = '')
{
    try {
        $dob = Carbon::parse($birth_date);

        if ($dob->isFuture()) {
            return "Could Not Parse";
        }

        $diff = $dob->diff(Carbon::now());

        return "{$diff->y} year(s), {$diff->m} month(s), {$diff->d} day(s) ({$diff->days} total days)";
    } catch(\Exception $d) {
        return "Could Not Parse";
    }
}

}

