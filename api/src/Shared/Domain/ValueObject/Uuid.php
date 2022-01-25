<?php

declare(strict_types=1);

namespace App\Shared\Domain\ValueObject;

class Uuid
{
    public function __construct(private string $uuid)
    {
    }

    public function __toString(): string
    {
        return $this->uuid;
    }
}
