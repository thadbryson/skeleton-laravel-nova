<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Tool\Validation\Assert;

/**
 * Class ApiController
 *
 * API system controller.
 */
abstract class ApiController extends Controller
{
    /**
     * Any messages returned in the Response.
     *
     * @var array
     */
    protected $messages = [
        'main'    => '',
        'success' => [],
        'errors'  => []
    ];

    /**
     * Response HTTP status code.
     *
     * @var int
     */
    protected $statusCode = 200;

    protected function setMainMessage(string $message)
    {
        $this->messages['main'] = $message;

        return $this;
    }

    protected function setSuccessMessages(array $messages = [])
    {
        $this->messages['success'] = $messages;

        return $this;
    }

    protected function setErrors(array $errors = [], int $statusCode = 400)
    {
        $this->statusCode         = $statusCode;
        $this->messages['errors'] = Assert::allString($errors, '$errors must only be strings.');

        return $this;
    }

    protected function json(array $data = []): JsonResponse
    {
        return new JsonResponse([
            'data'     => $data,
            'messages' => $this->messages
        ], $this->statusCode);
    }
}
