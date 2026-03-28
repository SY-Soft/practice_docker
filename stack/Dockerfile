FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libonig-dev

RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    zip \
    mbstring \
    bcmath

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer