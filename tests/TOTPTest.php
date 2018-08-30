<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 30.08.18
 * Time: 00:00
 */

use TOTP\TOTP;
use PHPUnit\Framework\TestCase;

class TOTPTest extends TestCase
{

    public function testTimeCounter()
    {
        $totp = new TOTP();
        $timeCounter = $totp->timeCounter();
        $this->assertNotEmpty($timeCounter, "$timeCounter is not empty!");
    }
}
