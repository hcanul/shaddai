FROM php:8.2-fpm

WORKDIR /var/www

# Instalar dependencias del sistema y PHP
RUN apt-get update && apt-get install -y \
    git unzip curl libpng-dev libonig-dev libxml2-dev zip nodejs npm \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer manualmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiar archivos de Laravel
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Instalar y compilar assets
RUN npm install && npm run build

# Cambiar permisos
RUN chown -R www-data:www-data /var/www
