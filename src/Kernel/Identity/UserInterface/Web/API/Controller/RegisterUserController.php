<?php

declare(strict_types=1);

namespace App\Kernel\Identity\UserInterface\Web\Controller;

use App\Kernel\Identity\Application\UseCase\Command\RegisterUser;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RegisterUserController
{
    private $commandBus;

    public function __construct($commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function __invoke(Request $request): Response
    {
        $this->commandBus->handle(
            new RegisterUser(
                $request->request->get('email'),
                $request->request->get('password')
            ),
        );
    }
}
