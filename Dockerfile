FROM php:8.2-fpm
WORKDIR "/var/www/html"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        vim \
        php8.2-http \
        php8.2-mysql \
        php8.2-redis \
        php8.2-zip; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

EXPOSE 80