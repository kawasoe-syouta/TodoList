FROM php:7.3-apache

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN a2enmod rewrite
RUN docker-php-ext-install pdo_mysql
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN apt-get update && install -y \
    libzip-dev \
    curl \
    gnupg \
    unzip \
    zlib1g-dev \
    && docker-php-ext-install \
    pdo_mysql \
    zip

COPY --from=composer:2.1.3 /usr/bin/composer /usr/bin/composer