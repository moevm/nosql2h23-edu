FROM composer:latest

WORKDIR /var/www/edu

CMD bash -c "composer install --ignore-platform-req=ext-mongodb"
