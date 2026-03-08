#!/bin/bash

# Exit on error
set -e

# Clear caches
php artisan config:clear
php artisan cache:clear

# Run migrations (force for production)
# This will create your tables in Cloud SQL automatically
echo "Running migrations..."
php artisan migrate --force

# Start Apache in foreground
echo "Starting Apache..."
exec apache2-foreground
