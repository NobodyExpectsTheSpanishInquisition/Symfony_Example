<?php

namespace App\Tests\Auth\RegisterUser\Application;

use App\Auth\RegisterUser\Application\RegisterUserHandler;
use App\Auth\Shared\Infrastructure\Doctrine\AuthEntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class RegisterUserHandlerTest extends KernelTestCase
{
    private RegisterUserHandler $handler;
    private RegisterUserHandlerTestAssertions $assertions;
    private RegisterUserHandlerTestData $testData;
    private AuthEntityManager $entityManager;

    public function testHandle(): void
    {
        $this->handler->handle($this->testData->getCommand());

        $this->assertions->assertUserWasRegistered();
    }

    protected function setUp(): void
    {
        parent::setUp();

        $container = self::getContainer();

        $this->testData = $container->get(RegisterUserHandlerTestData::class);
        $this->assertions = $container->get(RegisterUserHandlerTestAssertions::class);
        $this->handler = $container->get(RegisterUserHandler::class);
        $this->entityManager = $container->get(AuthEntityManager::class);

        $this->entityManager->beginTransaction();
    }

    protected function tearDown(): void
    {
        $this->entityManager->rollback();

        parent::tearDown();
    }
}
