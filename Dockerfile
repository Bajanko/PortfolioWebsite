FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl nodejs npm

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy project
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Fix permissions
RUN chmod -R 775 storage bootstrap/cache

# DO NOT expose fixed port

# Start Laravel correctly on Railway dynamic port
CMD php artisan migrate --force && php -S 0.0.0.0:$PORT -t public