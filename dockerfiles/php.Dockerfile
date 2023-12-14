FROM php:8.2-fpm

WORKDIR /var/www/edu

RUN chown -R www-data:www-data /var/www/edu/.*
RUN apt-get install -y autoconf pkg-config
RUN pecl install mongodb
RUN touch /usr/local/etc/php/php.ini
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/php.ini
