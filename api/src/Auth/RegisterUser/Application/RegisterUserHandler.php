<?php

declare(strict_types=1);

namespace App\Auth\RegisterUser\Application;

use App\Auth\Shared\Domain\Factory\UserFactory;

final class RegisterUserHandler
{
    public function __construct(private UserFactory $factory, private SaveUserInterface $saveUser)
    {
    }

    public function handle(RegisterUserCommand $command): void
    {
        $user = $this->factory->create($command->getUserId(), $command->getLogin(), $command->getPlainPassword());

        $this->saveUser->transactional(function () use ($user): void {
            $this->saveUser->save($user);
        });
    }
}
