#!/bin/bash

php artisan cache:clear
php artisan migrate --seed
php artisan config:cache
php artisan view:clear
php artisan route:clear