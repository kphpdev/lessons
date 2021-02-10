FROM php:8-fpm

ENV DEBIAN_FRONTEND noninteractive

# Basics
RUN set -x \
    && ln -sf /usr/share/zoneinfo/Europe/Moscow /etc/localtime \
    && usermod -u 1000 www-data \
    && set +x

# Install git
RUN apt-get update && apt-get install -y git

# Install pdo_mysql
RUN docker-php-ext-install pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy FPM config
COPY ./docker/app/www.conf /usr/local/etc/php-fpm.d/www.conf

# Set working directory
WORKDIR /var/www
