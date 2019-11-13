<?php

declare(strict_types=1);

namespace App\Kernel\Identity\Infrastructure\Persistance\InMemory;

use App\Kernel\Identity\Domain\Model\Entity\User;
use App\Kernel\Identity\Domain\Model\Repository\UserRepository;
use App\Kernel\Identity\Domain\Model\ValueObject\UserId;

/**
 * User repository In-memory implementation used for test environments
 */
final class UserInMemoryRepository implements UserRepository
{
    public function add(User $user): void
    {
    }

    public function get(UserId $userId): User
    {
    }
}
