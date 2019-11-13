<?php

declare(strict_types=1);

namespace App\Kernel\Identity\Domain\Model\Repository;

use App\Kernel\Identity\Domain\Model\Entity\User;
use App\Kernel\Identity\Domain\Model\ValueObject\UserId;

interface UserRepository
{
    public function add(User $user): void;

    public function get(UserId $userId): User;
}
