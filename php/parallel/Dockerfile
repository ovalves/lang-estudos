FROM php:zts

WORKDIR /app

COPY src/ src/
COPY composer.json composer.json

RUN pecl install parallel
RUN docker-php-ext-enable parallel

RUN apt-get update && apt-get install -y zlib1g-dev libpng-dev libjpeg-dev
RUN docker-php-ext-configure gd --with-jpeg
RUN docker-php-ext-install gd
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer