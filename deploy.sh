#!/bin/bash

php artisan cache:clear
php artisan migrate --seed --force
php artisan config:cache
php artisan view:clear
php artisan route:clear
