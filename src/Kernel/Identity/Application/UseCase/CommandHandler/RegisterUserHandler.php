<?php declare(strict_types=1);

namespace App\Kernel\Identity\Application\UseCase\CommandHandler;

use App\Kernel\Identity\Application\UseCase\Command\RegisterUser;

interface RegisterUserHandler
{
    public function handle(RegisterUser $command): void;
}
