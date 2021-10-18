FROM php:8.0-apache
COPY ./php/php.ini /usr/local/etc/php
COPY ./apache/vhost.conf /etc/apache2/sites-enabled/vhost.conf
ENV TZ=Asia/Tokyo

RUN apt-get update
RUN a2enmod headers
RUN rm /etc/apache2/sites-enabled/000-default.conf

WORKDIR /var/www/html