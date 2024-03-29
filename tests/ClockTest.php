<?php

namespace Tests\Mguinea\Psr20;

use DateTimeImmutable;
use Mguinea\Psr20\Clock;
use PHPUnit\Framework\TestCase;

class ClockTest extends TestCase
{
    public function testItShouldReturnDateTimeImmutable(): void
    {
        $now = (new Clock())->now();

        $this->assertInstanceOf(DateTimeImmutable::class, $now);
    }
}
