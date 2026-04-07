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

# ✅ 1. Copy dependency files ONLY
COPY composer.json composer.lock ./
RUN composer install --optimize-autoloader --no-dev --no-scripts --no-interaction

# ✅ 2. Copy frontend dependency files ONLY
COPY package.json package-lock.json ./
RUN npm ci

# ✅ 3. NOW copy the rest of your code
COPY . .

# ✅ 4. Finish up after full code is available
RUN composer dump-autoload --optimize
RUN npm run build

EXPOSE 8000
CMD php artisan migrate --force && php artisan storage:link && php artisan serve --host=0.0.0.0 --port=8000
