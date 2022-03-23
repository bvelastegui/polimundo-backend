# Se utiliza la imagen oficial de php
FROM php:8.1-cli-alpine

# De la imagen oficial de composer copiamos el binario
COPY --from=composer /usr/bin/composer /usr/local/bin/composer

# Se define el espacio de trabajo
WORKDIR /var/www/html/

# Se configura la zona horaria por defecto
RUN echo "UTC" > /etc/timezone

# Se instalan las extensiones requeridas por laravel
RUN apk add --update zip unzip curl sqlite libzip-dev libmcrypt-dev libpng-dev libjpeg-turbo-dev libxml2-dev icu-dev postgresql-dev curl-dev libmemcached-dev &&\
    apk add --update --virtual build-dependencies build-base gcc wget autoconf && \
    docker-php-ext-install gd && \
    docker-php-ext-install zip &&\
    docker-php-ext-install xml &&\
    docker-php-ext-install bcmath &&\
    docker-php-ext-install pdo_mysql &&\
    apk del build-dependencies &&\
    rm -rf /var/cache/apk/*

# Se instala y configura supervisor
RUN apk add --no-cache supervisor && mkdir -p /etc/supervisor.d/
COPY .docker/supervisord.ini /etc/supervisor.d/supervisord.ini

# Se agrega la configuración recomendada por laravel para php
COPY .docker/php.ini /etc/php/8.1/cli/conf.d/99-laravel.ini

COPY .docker/start-container /usr/local/bin/start-container
RUN chmod +x /usr/local/bin/start-container

# Se instala y configura bash
RUN apk add bash
RUN sed -i 's/bin\/ash/bin\/bash/g' /etc/passwd
