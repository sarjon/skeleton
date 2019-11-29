<?php

declare(strict_types=1);

namespace App\Kernel\Identity\UserInterface\Console\Command;

use App\Kernel\Identity\Application\UseCase\Command\RegisterUser;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class RegisterUserCommand extends Command
{
    private $commandBus;

    public function __construct($commandBus)
    {
        parent::__construct();

        $this->commandBus = $commandBus;
    }
    
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->commandBus->handle(
            new RegisterUser(
                $input->getArgument('email'),
                $input->getArgument('password')
            ),
        );
    }
}
