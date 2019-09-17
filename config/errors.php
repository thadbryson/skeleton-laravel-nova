<?php

declare(strict_types = 1);

return [
    '404' => [
        'title'   => '404 Not Found',
        'message' => 'We couldn\'t find what you were looking for.<br>Please looking for something else.'
    ],
    '419' => [
        'title'   => 'Page Expired',
        'message' => 'The page has expired due to inactivity.<br>Please refresh and try again.'
    ],
    '429' => [
        'title'   => 'Error',
        'message' => 'Too many requests.'
    ],
    '500' => [
        'title'   => 'Error',
        'message' => 'We\'ve encountered an error. <br>Please try again later.',
    ],
    '503' => [
        'title'   => 'Site is unavailable right now.',
        'message' => 'We are doing some maintenance right now. <br>We will be back shortly.'
    ]
];
