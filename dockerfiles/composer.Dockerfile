FROM composer:2.6

WORKDIR /var/www/edu

CMD bash -c "composer install --ignore-platform-req=ext-mongodb"
