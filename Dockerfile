FROM php:7.4-fpm-alpine

RUN apk update && apk upgrade
RUN apk add icu-dev

# Default PHP installation comes with all requirements for CakePHP, except:
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl mysqli pdo_mysql
RUN docker-php-ext-enable intl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

USER 1000:1000
