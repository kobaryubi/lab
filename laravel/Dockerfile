FROM php:8.3-fpm

RUN apt update && apt install -y git zip

COPY --from=composer /usr/bin/composer /usr/bin/composer
