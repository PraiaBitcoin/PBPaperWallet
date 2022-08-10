FROM php:8.1-apache

WORKDIR /var/www/html/

COPY . .

EXPOSE 80