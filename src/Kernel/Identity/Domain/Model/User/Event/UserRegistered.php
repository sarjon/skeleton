<?php

declare(strict_types=1);

namespace App\Kernel\Identity\Domain\Model\User\Event;

use App\Kernel\Identity\Domain\Model\User\ValueObject\UserId;
use App\SharedKernel\Domain\ValueObject\Email;

final class UserRegistered
{
    public function __construct(UserId $userId, Email $email)
    {
    }
}
