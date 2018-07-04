FROM php:7.2-fpm@sha256:27f22b2051ee3f735bea36b295095cdd5a50f12668897676e8c2407692f9b806
LABEL maintainer="curtis@delicata.me.uk"

# Installing dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    mysql-client \
    libpng-dev \
    locales \
    zip \
    git-core

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Installing extensions
RUN docker-php-ext-install pdo_mysql gd mbstring zip pcntl

# Installing composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Setting locales
RUN echo en_GB.UTF-8 UTF-8 > /etc/locale.gen && locale-gen

# Allow container to write on host
RUN usermod -u 1000 www-data

# Changing Workdir
WORKDIR /application
