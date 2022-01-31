<?php

declare(strict_types=1);

namespace App\Auth\RegisterUser\Application;

use App\Auth\Shared\Domain\Aggregate\User;
use App\Shared\Application\Transaction\TransactionalInterface;

interface SaveUserInterface extends TransactionalInterface
{
    public function save(User $user): void;
}
