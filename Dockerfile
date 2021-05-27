FROM php:7.3.28-fpm

WORKDIR /app

COPY . .

RUN apt update -y

RUN apt install git nginx zlib1g-dev libzip-dev supervisor -y

RUN docker-php-ext-install zip mysqli pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

COPY docker/nginx.conf /etc/nginx/sites-enabled/default
COPY docker/supervisord.conf /etc/supervisord.conf
COPY deploy.sh .

RUN chown -R www-data:www-data /app

EXPOSE 80

ENTRYPOINT ['./deploy.sh']

CMD ["supervisord", "-c", "/etc/supervisord.conf"]
