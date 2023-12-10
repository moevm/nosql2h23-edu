FROM php:8.2-fpm
LABEL authors="ekurochkina"

RUN apt-get update
RUN apt-get install php8.2-{cli, zip, mysql, bz2, curl, mbstring, intl, common}
RUN apt-get install -y mongodb-org
RUN apt-get install php-pear, php8.2-dev

WORKDIR /var/edu/
ENTRYPOINT ["php-fpm"]
