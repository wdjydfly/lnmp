FROM php:7.4-fpm

ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN docker-php-ext-install pdo_mysql

RUN pecl install redis-5.3.4 && docker-php-ext-enable redis

RUN pecl install --configureoptions 'enable-sockets="no" enable-openssl="no" enable-http2="yes" enable-mysqlnd="no" enable-swoole-json="no" enable-swoole-curl="no" enable-cares="no"' swoole && docker-php-ext-enable swoole