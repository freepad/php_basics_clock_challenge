<?php

// BEGIN (write your solution here)
function getAngle($time)
{
    $arr = explode(":", $time);
    $minute = $arr[1];
    $hour = ($arr[0] < 12) ? $arr[0] : $arr[0] - 12;
    $minuteAngle = (360 / 60) * $minute;
    $hourAngle  = (360 / 12) * $hour + (360 / 12 / 60) * $minute;

    $angle = abs($hourAngle - $minuteAngle);
    $angleLess = ($angle <= 180) ? $angle : 360 - $angle;

    return $angleLess;
}
// END
