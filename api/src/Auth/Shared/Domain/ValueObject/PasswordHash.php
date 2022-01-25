<?php

declare(strict_types=1);

namespace App\Auth\Shared\Domain\ValueObject;

use App\Shared\Domain\ValueObject\PlainPassword;

final class PasswordHash
{
    private function __construct(private string $password)
    {
    }

    public function __toString(): string
    {
        return $this->password;
    }

    public static function hash(PlainPassword $plainPassword): self
    {
        return new self(password_hash((string) $plainPassword, PASSWORD_BCRYPT));
    }
}
