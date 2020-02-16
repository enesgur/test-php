FROM enesgur/php-fpm:7.2

LABEL maintainer="Enes Gür"
COPY default /etc/nginx/sites-available
COPY default /etc/nginx/sites-enabled
COPY index.php /var/www/html

