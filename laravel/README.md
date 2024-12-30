# Laravel

## SQLite

```sh
php artisan db
.headers on
.mode column
```

## Running Migrations

```sh
php artisan migrate --pretend
php artisan migrate
```

## Rolling Back All Migrations

```sh
php artisan migrate:reset
```

## Autoloading

```sh
composer dump-autoload
```
