<?php declare(strict_types=1);

namespace App\Kernel\Identity\Application\UseCase\CommandHandler;

use App\Kernel\Identity\Application\UseCase\Command\InitiatePasswordReset;

interface InitiatePasswordResetHandler
{
    public function handle(InitiatePasswordReset $command): void;
}
