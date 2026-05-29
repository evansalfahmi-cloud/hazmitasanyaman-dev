#!/bin/bash

echo "=================================="
echo "BUILDING LARAVEL PROJECT..."
echo "=================================="

npm run build

echo "=================================="
echo "SYNCING TO PRODUCTION..."
echo "=================================="

rsync -av --delete \
--no-perms \
--no-owner \
--no-group \
--exclude=node_modules \
--exclude=.git \
--exclude=tests \
--exclude=storage \
--exclude=bootstrap/cache \
--exclude=.env \
/var/www/hazmitasanyaman_dev/ \
/var/www/hazmitasanyaman/

echo "=================================="
echo "CLEARING CACHE..."
echo "=================================="

cd /var/www/hazmitasanyaman

php artisan optimize:clear

echo "=================================="
echo "DEPLOY COMPLETE!"
echo "=================================="