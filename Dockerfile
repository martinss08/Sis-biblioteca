FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    zip unzip curl git libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

WORKDIR /var/www/html

# Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
