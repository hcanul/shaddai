# Dockerfile para Laravel (ubicado en ./laravel/Dockerfile)
FROM php:8.2-fpm
WORKDIR /var/www
RUN apt-get update && apt-get install -y \
    git unzip curl libpng-dev libonig-dev libxml2-dev zip nodejs npm \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader
COPY . .
RUN npm install && npm run build
RUN chown -R www-data:www-data /var/www
