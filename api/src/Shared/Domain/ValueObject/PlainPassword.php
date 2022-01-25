<?php

declare(strict_types=1);

namespace App\Shared\Domain\ValueObject;

final class PlainPassword
{
    public function __construct(private string $plainPassword)
    {
    }

    public function __toString(): string
    {
        return $this->plainPassword;
    }
}
