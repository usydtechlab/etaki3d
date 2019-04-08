ARG PHP_VERSION=""
FROM php:${PHP_VERSION:+${PHP_VERSION}-}fpm-alpine

# Update & Upgrade
RUN apk update; \
    apk upgrade;


# https://github.com/docker-library/wordpress/issues/10
# Copy uploads.ini to mounted volume /usr/local/etc/php
COPY uploads.ini /usr/local/etc/php/conf.d/uploads.ini


# https://github.com/docker-library/php/issues/221
RUN set -ex \
  && apk --no-cache add \
    postgresql-dev


# Install postgres pdo
RUN docker-php-ext-install pdo pdo_pgsql pgsql

#RUN docker-php-ext-install mysqli pdo_mysql