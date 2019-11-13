<?php

declare(strict_types=1);

namespace App\Kernel\Identity\Infrastructure\Persistance\Doctrine\ORM;

use App\Kernel\Identity\Domain\Model\Entity\User;
use App\Kernel\Identity\Domain\Model\Repository\UserRepository;
use App\Kernel\Identity\Domain\Model\ValueObject\UserId;

final class UserOrmRepository implements UserRepository
{
    public function add(User $user): void
    {
    }

    public function get(UserId $userId): User
    {
    }
}
