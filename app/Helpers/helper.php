<?php

use App\Models\Gymnasium;
use Carbon\Carbon;

/**
 * Write code on Method
 *
 * @return response()
 */

function gymnasium()
{
    return Gymnasium::first();
}

function operating_hour($start, $end)
{
    // Set the starting time
    $startTime = Carbon::parse($start);

    // Set the ending time
    $endTime = Carbon::parse($end);

    $times = [];
    // Iterate through the time range with an interval of 60 minutes
    for ($currentTime = $startTime; $currentTime->lte($endTime); $currentTime->addMinutes(60)) {
        // Process each time value within the loop
        $currentHour = $currentTime->format('H');
        $currentMinute = $currentTime->format('i');

        $times[] = "{$currentHour}:{$currentMinute}";

        // Perform any desired actions or calculations based on the current time value
    }

    return $times;
}


if (!function_exists('convertYmdToMdy')) {
    function convertYmdToMdy($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('m-d-Y');
    }
}

/**
 * Write code on Method
 *
 * @return response()
 */
if (!function_exists('convertMdyToYmd')) {
    function convertMdyToYmd($date)
    {
        return Carbon::createFromFormat('m-d-Y', $date)->format('Y-m-d');
    }
}
