#!/usr/bin/env bash
set -e

# Run before the app starts (Pre-Deploy on Railway).
# Caches config, routes, views; creates storage link; runs migrations.

echo "Running Laravel optimization..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link || true

echo "Running migrations..."
php artisan migrate --force --no-interaction

echo "Init complete."
