FROM php:8.1.0-fpm-alpine

WORKDIR /var/www/html

RUN mkdir -p /webapp/storage

RUN chown -R $(whoami):www-data /webapp/storage && chmod -R ug+w /webapp/storage
RUN apk --no-cache add postgresql-dev
RUN docker-php-ext-install pdo pdo_pgsql
RUN apk add --no-cache zip libzip-dev libpng-dev
RUN docker-php-ext-install zip
RUN docker-php-ext-install gd
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-ram-limit.ini
RUN echo 'max_execution_time = 600' >> /usr/local/etc/php/conf.d/docker-php-maxexectime.ini
