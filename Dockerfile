FROM php:8.2-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    nodejs \
    npm \
    libzip-dev \
    zip

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy project
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build frontend
RUN npm install
RUN npm run build

# Fix Laravel permissions
RUN chmod -R 775 storage bootstrap/cache

# Start Laravel on Railway port
CMD php artisan migrate --force && php -S 0.0.0.0:$PORT -t public
RUN php artisan optimize

RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache