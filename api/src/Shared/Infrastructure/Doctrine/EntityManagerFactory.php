<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Doctrine;

use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;

final class EntityManagerFactory
{
    public function __construct(private ManagerRegistry $managerRegistry)
    {
    }

    public function createAuthEntityManager(): ObjectManager
    {
        return $this->managerRegistry->getManager(EntityManagerName::AUTH);
    }
}
