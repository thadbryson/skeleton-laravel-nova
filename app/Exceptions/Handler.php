<?php

declare(strict_types = 1);

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

final class Handler extends ExceptionHandler
{
    /**
     * Report or log an exception.
     *
     * @param  \Exception $exception
     * @return void
     * @throws Exception
     */
    public function report(Exception $exception): void
    {
        parent::report($exception);
    }
}
