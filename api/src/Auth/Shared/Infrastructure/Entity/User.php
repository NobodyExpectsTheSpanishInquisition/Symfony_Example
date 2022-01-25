<?php

declare(strict_types=1);

namespace App\Auth\Shared\Infrastructure\Entity;

use App\Auth\Shared\Domain\ValueObject\Login;
use App\Auth\Shared\Domain\ValueObject\PasswordHash;
use App\Shared\Domain\ValueObject\UserId;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'auth_users')]
class User
{
    #[Id]
    #[Column(type: 'string')]
    private string $id;

    #[Column(type: 'string')]
    private string $login;

    #[Column(type: 'string', name: 'password_hash')]
    private string $passwordHash;

    public function __construct(UserId $id, Login $login, PasswordHash $passwordHash)
    {
        $this->id = (string) $id;
        $this->login = (string) $login;
        $this->passwordHash = (string) $passwordHash;
    }
}
