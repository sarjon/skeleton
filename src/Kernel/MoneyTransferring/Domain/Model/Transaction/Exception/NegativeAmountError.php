<?php declare(strict_types=1);

namespace App\Kernel\MoneyTransferring\Domain\Model\Transaction\Exception;

use RuntimeException;

/**
 * Throw when trying to book transaction with negative amount
 */
class NegativeAmountError extends RuntimeException
{
}
