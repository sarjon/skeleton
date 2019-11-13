<?php

declare(strict_types=1);

namespace App\Kernel\Identity\Domain\Model\Event;

use App\Kernel\Identity\Domain\Model\ValueObject\UserId;
use App\SharedKernel\Domain\ValueObject\Email;

final class UserRegistered
{
    public function __construct(UserId $userId, Email $email)
    {
    }
}
