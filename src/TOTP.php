<?php
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 29.08.18
 * Time: 22:25
 */

namespace TOTP;


class TOTP
{
    public static function timeCounter()
    {
        $now = time();
        $timeStart = mktime();
        $timeInterval = 30;
        $timeCounter = floor(($now - $timeStart) / $timeInterval);
        return $timeCounter;
    }

}