<?php declare(strict_types=1);

namespace App\Kernel\MoneyTransferring\Application\UseCase\CommandHandler;

use App\Kernel\MoneyTransferring\Application\UseCase\Command\BookTransaction;

final class BookTransactionConcreteHandler implements BookTransactionHandler
{
    public function handle(BookTransaction $command): int
    {
        // Orchestrate domain to do stuff.
        // E.g. retrieve entity from repository, call method on entity & etc.
    }
}
