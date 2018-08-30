<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 29.08.18
 * Time: 22:25
 */

namespace TOTP;


class TOTP
{
    /**
     * @var int $timeInterval
     */
    private $timeInterval = 30;

    /**
     * @var int $timeStart
     */
    private $timeStart = 0;

    /**
     * @var string $hashAlgorithm
     */
    private $hashAlgorithm = 'sha1';

    public function __construct()
    {
        $this->timeCounter();
    }

    /**
     * @return float
     */
    public function timeCounter(): float
    {
        date_default_timezone_set('UTC');
        $now = time();
        $timeStart = $this->getTimeStart();
        $timeInterval = $this->getTimeInterval();
        $timeCounter = floor(($now - $timeStart) / $timeInterval);
        return $timeCounter;
    }

    /**
     * @return int
     */
    public function getTimeStart(): int
    {
        return $this->timeStart;
    }

    /**
     * @param int $timeStart
     */
    public function setTimeStart(int $timeStart): void
    {
        $this->timeStart = $timeStart;
    }

    /**
     * @return int
     */
    public function getTimeInterval(): int
    {
        return $this->timeInterval;
    }

    /**
     * @param int $timeInterval
     */
    public function setTimeInterval(int $timeInterval): void
    {
        $this->timeInterval = $timeInterval;
    }

    /**
     * @return string
     */
    public function getHashAlgorithm(): string
    {
        return $this->hashAlgorithm;
    }

    /**
     * @param string $hashAlgorithm
     */
    public function setHashAlgorithm(string $hashAlgorithm): void
    {
        $this->hashAlgorithm = $hashAlgorithm;
    }
}