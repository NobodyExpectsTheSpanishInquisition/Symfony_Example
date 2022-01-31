<?php

declare(strict_types=1);

namespace App\Tests\Auth\RegisterUser\Application;

use App\Auth\Shared\Application\Orm\AuthEntityManagerInterface;
use App\Auth\Shared\Infrastructure\Entity\User;

final class RegisterUserHandlerTestAssertions
{
    public function __construct(
        private AuthEntityManagerInterface $entityManager,
        private RegisterUserHandlerTestData $testData,
        private RegisterUserHandlerTest $testCase
    ) {
    }

    public function assertUserWasRegistered(): void
    {
        $user = $this->entityManager->find(User::class, (string) $this->testData->getUserId());

        $this->testCase::assertNotNull($user);
    }
}
