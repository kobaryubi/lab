FROM php:8.3-fpm

RUN apt update && apt install -y git zip sqlite3

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN curl https://get.volta.sh | bash
ENV PATH="/root/.volta/bin:$PATH"

WORKDIR /usr/src/app/laravel

COPY package*.json ./
RUN npm install

COPY composer.json composer.lock ./
RUN composer install
