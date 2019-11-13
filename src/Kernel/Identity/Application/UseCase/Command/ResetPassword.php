<?php

declare(strict_types=1);

namespace App\Kernel\Identity\Application\UseCase\Command;

class ResetPassword
{
    public function __construct(string $passwordResetToken, string $newEmail)
    {
    }
}
