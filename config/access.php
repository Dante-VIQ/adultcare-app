<?php

/*
| Role and access settings. These read from the environment here (and only here)
| so they keep working after `php artisan config:cache`, where env() calls made
| anywhere else in the app return null.
*/

$list = fn (?string $value): array => array_values(array_filter(array_map('trim', explode(',', (string) $value))));

return [
    'roles' => $list(env('MASTER_ROLES', '')),
    'engineer_email' => env('ENGINEER_EMAIL'),
    'master_emails' => $list(env('MASTER_EMAILS', '')),
    'default_role' => env('DEFAULT_ROLE', 'user'),
];
