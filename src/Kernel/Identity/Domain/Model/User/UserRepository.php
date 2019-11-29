<?php

declare(strict_types=1);

namespace App\Kernel\Identity\Domain\Model\User;

use App\Kernel\Identity\Domain\Model\User\Entity\User;
use App\Kernel\Identity\Domain\Model\User\ValueObject\UserId;

interface UserRepository
{
    public function add(User $user): void;

    public function get(UserId $userId): User;
}
