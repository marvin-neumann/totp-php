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
    /**
     * @var float $timeCounter
     */
    private $timeCounter;

    public function testTimeCounterIsNotEmpty()
    {
        $this->assertNotEmpty($this->timeCounter, 'timeCounter is Empty');
    }

    public function testTimeCounterIsNotNull()
    {
        $this->assertNotNull($this->timeCounter, 'timeCounter is Null');
    }

    /**
     * @return void
     */
    public function setUp(): void
    {
        $totp = new TOTP();
        $this->timeCounter = $totp->timeCounter();
    }
}
