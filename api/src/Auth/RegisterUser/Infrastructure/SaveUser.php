<?php

declare(strict_types=1);

namespace App\Auth\RegisterUser\Infrastructure;

use App\Auth\RegisterUser\Application\SaveUserInterface;
use App\Auth\Shared\Application\Orm\AuthEntityManagerInterface;
use App\Auth\Shared\Domain\Aggregate\User;
use App\Auth\Shared\Infrastructure\Entity\User as UserEntity;
use App\Shared\Infrastructure\Transaction\AbstractDoctrineTransactionalService;

final class SaveUser extends AbstractDoctrineTransactionalService implements SaveUserInterface
{
    public function __construct(AuthEntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
    }

    public function save(User $user): void
    {
        $newUser = new UserEntity($user->getUserId(), $user->getLogin(), $user->getPassword());

        $this->entityManager->persist($newUser);
    }
}
