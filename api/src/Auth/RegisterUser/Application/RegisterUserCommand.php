<?php

declare(strict_types=1);

namespace App\Auth\RegisterUser\Application;

use App\Auth\Shared\Domain\ValueObject\Login;
use App\Shared\Domain\ValueObject\PlainPassword;
use App\Shared\Domain\ValueObject\UserId;

final class RegisterUserCommand
{
    public function __construct(private UserId $userId, private Login $login, private PlainPassword $plainPassword)
    {
    }

    public function getUserId(): UserId
    {
        return $this->userId;
    }

    public function getLogin(): Login
    {
        return $this->login;
    }

    public function getPlainPassword(): PlainPassword
    {
        return $this->plainPassword;
    }
}
