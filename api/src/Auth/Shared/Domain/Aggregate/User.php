<?php

declare(strict_types=1);

namespace App\Auth\Shared\Domain\Aggregate;

use App\Auth\Shared\Domain\ValueObject\Login;
use App\Auth\Shared\Domain\ValueObject\PasswordHash;
use App\Shared\Domain\ValueObject\PlainPassword;
use App\Shared\Domain\ValueObject\UserId;

final class User
{
    private PasswordHash $password;

    public function __construct(private UserId $userId, private Login $login, PlainPassword $plainPassword)
    {
        $this->password = PasswordHash::hash($plainPassword);
    }

    public function getPassword(): PasswordHash
    {
        return $this->password;
    }

    public function getUserId(): UserId
    {
        return $this->userId;
    }

    public function getLogin(): Login
    {
        return $this->login;
    }
}
