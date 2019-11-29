<?php

declare(strict_types=1);

namespace App\Kernel\Identity\Application\UseCase\CommandHandler;

use App\Kernel\Identity\Application\UseCase\Command\InitiatePasswordReset;

class InitiatePasswordResetConcreteHandler
{
    public function handle(InitiatePasswordReset $command): void
    {
    }
}
