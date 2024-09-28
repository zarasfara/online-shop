composer install --optimize-autoloader --no-progress --no-interaction
chown -R www-data:www-data storage/ bootstrap/cache
chmod -R 775 storage bootstrap/cache
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
