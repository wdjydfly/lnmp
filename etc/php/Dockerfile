FROM php:7.4-fpm

ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN docker-php-ext-install pdo_mysql

RUN pecl install redis-5.3.4 && docker-php-ext-enable redis