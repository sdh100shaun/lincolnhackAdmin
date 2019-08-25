FROM php:7.2-fpm

RUN apt-get update && apt-get install --yes --no-install-recommends \
    libssl-dev

RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

RUN pecl install xdebug-2.6.0
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
EXPOSE 9000
CMD ["php-fpm","-F"]