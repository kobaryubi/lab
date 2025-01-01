<?php

return [
    "cognito" => [
        "region" => env("AWS_DEFAULT_REGION"),
        "client_id" => env("AWS_COGNITO_CLIENT_ID"),
        "client_secret" => env("AWS_COGNITO_CLIENT_SECRET"),
    ],

    // 'postmark' => [
    //     'token' => env('POSTMARK_TOKEN'),
    // ],

    // 'ses' => [
    //     'key' => env('AWS_ACCESS_KEY_ID'),
    //     'secret' => env('AWS_SECRET_ACCESS_KEY'),
    //     'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    // ],

    // 'resend' => [
    //     'key' => env('RESEND_KEY'),
    // ],

    // 'slack' => [
    //     'notifications' => [
    //         'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
    //         'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
    //     ],
    // ],
];
