<?php

declare(strict_types=1);

namespace Mguinea\Psr20;

use DateTimeImmutable;
use Psr\Clock\ClockInterface;

class Clock implements ClockInterface
{
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}
