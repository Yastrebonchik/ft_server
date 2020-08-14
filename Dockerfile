FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade 
RUN apt-get -y install nginx php-fpm php-mysql vim mariadb-server
RUN rm /etc/nginx/sites-enabled/default

COPY srcs/start.sh /
COPY srcs/nginx.conf /etc/nginx/sites-enabled/
COPY srcs/nginx.conf /etc/nginx/sites-available/

ADD https://files.phpmyadmin.net/phpMyAdmin/4.9.5/phpMyAdmin-4.9.5-all-languages.tar.gz phpMyAdmin.tar.gz
ADD https://wordpress.org/latest.tar.gz wordpress.tar.gz

RUN tar xzfv phpMyAdmin.tar.gz && mv phpMyAdmin-4.9.5-all-languages /var/www/html/phpmyadmin
RUN tar xzfv wordpress.tar.gz && mv wordpress /var/www/html
RUN rm phpMyAdmin.tar.gz wordpress.tar.gz

COPY srcs/wp-config.php /var/www/html/wordpress
COPY srcs/config.inc.php /var/www/html/phpmyadmin

RUN chown -R www-data var/www/html

EXPOSE 80 443

ENTRYPOINT bash start.sh 