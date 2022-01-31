<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Transaction;

use App\Shared\Application\Transaction\TransactionalInterface;
use Doctrine\ORM\EntityManagerInterface;

abstract class AbstractDoctrineTransactionalService implements TransactionalInterface
{
    public function __construct(protected EntityManagerInterface $entityManager)
    {
    }

    public function transactional(callable $transaction): void
    {
        $this->entityManager->wrapInTransaction($transaction);
    }
}
