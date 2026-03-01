FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl nodejs npm

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install and build frontend
RUN npm install
RUN npm run build

# Fix permissions
RUN chmod -R 777 storage bootstrap/cache

# Start Laravel on Railway port
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=$PORT