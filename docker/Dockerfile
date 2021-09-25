FROM php:8.0-apache
COPY ./php/php.ini /usr/local/etc/php

RUN apt-get update

# composer
# RUN curl -sS https://getcomposer.org/installer | php \
# 	&& mv composer.phar /usr/local/bin/composer \
# 	&& chmod +x /usr/local/bin/composer

WORKDIR /var/www/html

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

ENV TZ=Asia/Tokyo
