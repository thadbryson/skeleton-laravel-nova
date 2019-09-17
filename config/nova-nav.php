<?php

declare(strict_types = 1);

return [
    'Sections' => [

    ],

    'Users' => \App\Nova\User::class,

    'System' => [
        'Backups'  => 'BackupTool',
        'Routes'   => 'route-viewer',
        'Logs'     => 'LogsTool',
        'PHP Info' => 'nova-phpinfo'
    ]
];
