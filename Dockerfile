FROM php:8.2-apache

# Install zip and other required extensions
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
    && docker-php-ext-install zip pdo pdo_mysql

# Enable Apache rewrite
RUN a2enmod rewrite

# Set document root to public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

WORKDIR /var/www/html

COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80