FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpng-dev \
    libonig-dev libxml2-dev && \
    docker-php-ext-install pdo pdo_mysql mbstring zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --optimize-autoloader --no-dev --no-scripts --no-interaction

EXPOSE 8000
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000
