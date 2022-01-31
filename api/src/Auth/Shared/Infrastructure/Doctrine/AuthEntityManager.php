<?php

declare(strict_types=1);

namespace App\Auth\Shared\Infrastructure\Doctrine;

use App\Auth\Shared\Application\Orm\AuthEntityManagerInterface;
use Doctrine\ORM\Decorator\EntityManagerDecorator;

final class AuthEntityManager extends EntityManagerDecorator implements AuthEntityManagerInterface
{
}
