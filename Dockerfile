#Importing OS
FROM debian:buster

#LEMP Stack
RUN apt-get -y update && apt-get -y upgrade 
RUN apt-get -y install nginx php-fpm php-mysql vim mariadb-server openssl
RUN rm /etc/nginx/sites-enabled/default

#Copying all what needed
COPY srcs/start.sh /
COPY srcs/nginx.conf /etc/nginx/sites-enabled/
COPY srcs/nginx.conf /etc/nginx/sites-available/
COPY srcs/example.crt /etc/ssl/certs/example.crt
COPY srcs/example.key /etc/ssl/private/example.key

#Downloading phpmyadmin and wordpresss
ADD https://files.phpmyadmin.net/phpMyAdmin/4.9.5/phpMyAdmin-4.9.5-all-languages.tar.gz phpMyAdmin.tar.gz
ADD https://wordpress.org/latest.tar.gz wordpress.tar.gz

#Managing phpmyadmin and wordpress
RUN tar xzfv phpMyAdmin.tar.gz && mv phpMyAdmin-4.9.5-all-languages /var/www/html/phpmyadmin
RUN tar xzfv wordpress.tar.gz && mv wordpress /var/www/html
#RUN rm phpMyAdmin.tar.gz wordpress.tar.gz

#Copying config files of phpmyadmin and wordpress
COPY srcs/wp-config.php /var/www/html/wordpress
COPY srcs/config.inc.php /var/www/html/phpmyadmin

#Removing defaulg config of nginx
RUN chown -R www-data var/www/html

#Showing which ports to listen
EXPOSE 80 443

#Docker run
ENTRYPOINT bash start.sh 