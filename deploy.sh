#!/bin/bash

php artisan cache:clear
php artisan migrate --seed --force
php artisan config:cache
