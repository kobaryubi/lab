<?php

return [
    "name" => env("APP_NAME", "Laravel"),
    "env" => env("APP_ENV", "production"),
    "debug" => (bool) env("APP_DEBUG", false),
    "url" => env("APP_URL", "http://localhost"),
    "timezone" => env("APP_TIMEZONE", "UTC"),
    "faker_locale" => env("APP_FAKER_LOCALE", "en_US"),
];
