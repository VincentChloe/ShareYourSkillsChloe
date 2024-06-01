<?php
return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'broadcasting/auth', 'chat/*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'], // Pour des raisons de sécurité, vous devriez spécifier explicitement les origines autorisées.
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
