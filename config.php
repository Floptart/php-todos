<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'root',
        'password' => '',
        'connection' => "mysql:host=" . getenv('IP'),
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];