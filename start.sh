#!/bin/bash

# Configuration
echo "--- Starting Application Startup Sequence ---"

# The PORT environment variable is provided by Cloud Run.
# We ensure Apache knows about it.
export PORT=${PORT:-8080}
echo "Listening on port: $PORT"

# Clear caches for production performance
echo "Clearing caches..."
php artisan config:clear
php artisan cache:clear

# Run migrations (force for production)
# We wrap this in a check to ensure the server starts even if DB is temporarily unreachable
echo "Attempting to run database migrations..."
if php artisan migrate --force; then
    echo "Migrations completed successfully! ✅"
else
    echo "WARNING: Migrations failed or database is unreachable. ⚠️"
    echo "The server will start anyway to allow debugging via the browser."
fi

# Set permissions one last time to be sure
chown -R www-data:www-data storage bootstrap/cache

# Start Apache in foreground
# 'exec' ensures Apache receives termination signals properly
echo "Launching Apache server..."
exec apache2-foreground
