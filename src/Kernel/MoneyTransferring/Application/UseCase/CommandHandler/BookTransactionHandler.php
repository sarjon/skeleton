<?php declare(strict_types=1);

namespace App\Kernel\MoneyTransferring\Application\UseCase\CommandHandler;

use App\Kernel\MoneyTransferring\Application\UseCase\Command\BookTransaction;

interface BookTransactionHandler
{
    public function handle(BookTransaction $command): int;
}
