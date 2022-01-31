<?php

declare(strict_types=1);

namespace App\Auth\Shared\Domain\Factory;

use App\Auth\Shared\Domain\Aggregate\User;
use App\Auth\Shared\Domain\ValueObject\Login;
use App\Shared\Domain\ValueObject\PlainPassword;
use App\Shared\Domain\ValueObject\UserId;

final class UserFactory
{
    public function create(UserId $userId, Login $login, PlainPassword $plainPassword): User
    {
        return new User($userId, $login, $plainPassword);
    }
}
