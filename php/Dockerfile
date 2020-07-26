FROM php:7.4-fpm

MAINTAINER Andrey Lozunov <andrey.lozunov@gmail.com>

COPY mhsendmail_linux_amd64 /usr/local/bin/

RUN apt-get update && apt-get install -y --no-install-recommends \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
    && docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd opcache mysqli pdo_mysql \
	&& pecl install xdebug \
	&& docker-php-ext-enable xdebug
