FROM php:8.3-cli

# 1. Install system dependencies & Node.js in one layer to save space
RUN apt-get update && apt-get install -y \
    ca-certificates \
    curl \
    git \
    zip \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev && \
    curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# 2. Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring zip

# 3. Get Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# 4. Optimized PHP dependencies (Order matters for caching)
COPY composer.json composer.lock ./
RUN composer install --optimize-autoloader --no-dev --no-scripts --no-interaction

# 5. Optimized Node dependencies
COPY package.json package-lock.json ./
RUN npm ci

# 6. Copy the rest of the application
COPY . .

# 7. Build assets (Vite/Mix)
RUN npm run build

# 8. Set Environment variables
ARG APP_URL=http://localhost
ENV APP_URL=${APP_URL}
ENV APP_ENV=production
ENV PHP_OPCACHE_ENABLE=1

# 9. Set permissions (Crucial for storage/cache)
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

EXPOSE 8000

# 10. The ENTRYPOINT (Runs when the container starts, NOT during build)
# This handles migration and caching when the DB is actually reachable.
CMD php artisan migrate --force && \
    php artisan storage:link && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan serve --host=0.0.0.0 --port=8000
