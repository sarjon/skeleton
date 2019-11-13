<?php

declare(strict_types=1);

namespace App\SharedKernel\Infrastructure\Mailer\SwiftMailer;

use App\SharedKernel\Application\Mailer\Mailer;

final class SwiftMailer implements Mailer
{
    public function __construct(/* Swift_Mailer $mailer */)
    {
    }
}
