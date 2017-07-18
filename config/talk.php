<?php

return [
    'user' => [
        'model' => 'App\Http\models\sc_users',
    ],
    'broadcast' => [
        'enable' => false,
        'app_name' => 'Startupsclub',
        'pusher' => [
            'app_id' => '',
            'app_key' => '',
            'app_secret' => '',
        ],
    ],
];
