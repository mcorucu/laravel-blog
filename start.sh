#!/bin/bash

# Configuration
echo "--- Starting Application Startup Sequence ---"

# The PORT environment variable is provided by Cloud Run at runtime.
# We ensure Apache knows about it.
export PORT=${PORT:-8080}
echo "Detected Runtime Port: $PORT"

# Dynamically update Apache configuration to listen on the correct port
echo "Configuring Apache to listen on port $PORT..."
sed -i "s/Listen 80/Listen ${PORT}/g" /etc/apache2/ports.conf
sed -i "s/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/g" /etc/apache2/sites-available/*.conf

# Clear caches for production performance
echo "Clearing application caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
php artisan storage:link

# Ensure Livewire temporary upload directory exists
mkdir -p storage/app/livewire-tmp
chown -R www-data:www-data storage/app/livewire-tmp
chmod -R 775 storage/app/livewire-tmp

# Run migrations (force for production)
echo "Attempting to run database migrations and seeders..."
if php artisan migrate --force --seed; then
    echo "Migrations and Seeding completed successfully! ✅"
else
    echo "WARNING: Migrations failed or database is unreachable. ⚠️"
    echo "Check your DB_SOCKET and DB_PASSWORD variables."
fi

# Set permissions to ensure Apache can write to logs and storage
echo "Setting file permissions..."
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Start Apache in foreground
echo "Launching Apache server on port $PORT..."
exec apache2-foreground
