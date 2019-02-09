FROM php:7.1-apache

RUN a2enmod rewrite

COPY public_html/ /var/www/html/
RUN chmod a+rx -R /var/www/html
