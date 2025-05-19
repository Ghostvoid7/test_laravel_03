FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git \
    zip \
    curl \
    sudo \
    unzip
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

CMD ["php-fpm"]