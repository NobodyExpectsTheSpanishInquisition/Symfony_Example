<?php

declare(strict_types=1);

namespace App\Tests\Auth\RegisterUser\Application;

use App\Auth\RegisterUser\Application\RegisterUserCommand;
use App\Auth\Shared\Domain\ValueObject\Login;
use App\Shared\Domain\ValueObject\PlainPassword;
use App\Shared\Domain\ValueObject\UserId;

final class RegisterUserHandlerTestData
{
    public function getCommand(): RegisterUserCommand
    {
        return new RegisterUserCommand($this->getUserId(), new Login('test login'), new PlainPassword('123456'));
    }

    public function getUserId(): UserId
    {
        return new UserId('BA3AE2C4-46AD-4A4B-B34B-4CF669111BA9');
    }
}
