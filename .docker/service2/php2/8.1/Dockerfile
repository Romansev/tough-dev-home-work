FROM php:8.1-fpm

# System dependencies
RUN apt-get update
RUN apt-get install -y git zlib1g-dev wget libcurl4-openssl-dev librdkafka-dev libxml2-dev
#RUN pecl install xdebug && docker-php-ext-enable xdebug
#RUN apt-get install librdkafka-dev
RUN pecl install rdkafka

# PHP Extensions
# RUN docker-php-ext-install zip
RUN docker-php-ext-install soap
RUN docker-php-ext-install mysqli pdo pdo_mysql pcntl
RUN docker-php-ext-configure pcntl --enable-pcntl

#RUN \
#  curl 'http://pecl.php.net/get/redis-5.3.2.tgz' -o /tmp/redis-5.3.2.tgz  \
#  && cd /tmp \
#  && pecl install redis-5.3.2.tgz \
#  && rm -rf redis-5.3.2.tgz \
#  && docker-php-ext-enable redis

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

COPY --from=composer:1.8 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/service2
