FROM php:8.3-cli

# Install Node.js 20
RUN apt-get update && apt-get install -y ca-certificates curl && \
    curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# Install PHP extensions
RUN apt-get install -y \
    git zip unzip libzip-dev libpng-dev \
    libonig-dev libxml2-dev && \
    docker-php-ext-install pdo pdo_mysql mbstring zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --optimize-autoloader --no-dev --no-scripts --no-interaction

# Build frontend assets with Node.js 20
RUN npm install && npm run build

EXPOSE 8000
CMD php artisan migrate --force && php artisan storage:link && php artisan serve --host=0.0.0.0 --port=8000
