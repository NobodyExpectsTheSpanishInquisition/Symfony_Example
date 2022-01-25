<?php

declare(strict_types=1);

namespace App\Auth\Shared\Domain\ValueObject;

final class Login
{
    public function __construct(private string $login)
    {
    }

    public function __toString(): string
    {
        return $this->login;
    }
}
