<?php declare(strict_types=1);

namespace App\Kernel\Identity\Application\UseCase\CommandHandler;

use App\Kernel\Identity\Application\UseCase\Command\ResetPassword;

interface ResetPasswordHandler
{
    public function handle(ResetPassword $command): void;
}
