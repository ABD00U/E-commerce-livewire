FROM php:8.3-cli

RUN apt-get update && apt-get install -y ca-certificates curl && \
    curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

RUN apt-get install -y \
    git zip unzip libzip-dev libpng-dev \
    libonig-dev libxml2-dev && \
    docker-php-ext-install pdo pdo_mysql mbstring zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --optimize-autoloader --no-dev --no-scripts --no-interaction

COPY package.json package-lock.json ./
RUN npm ci

COPY . .

RUN composer dump-autoload --optimize

# ✅ Pass APP_URL at build time
ARG APP_URL=http://localhost
ENV APP_URL=${APP_URL}

RUN npm run build

# ✅ Add these for production performance
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

EXPOSE 8000
CMD php artisan migrate --force && php artisan storage:link && php artisan serve --host=0.0.0.0 --port=8000
