<?php

declare(strict_types=1);

namespace App\Shared\Application\Transaction;

interface TransactionalInterface
{
    public function transactional(callable $transaction): void;
}
