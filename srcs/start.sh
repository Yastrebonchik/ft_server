#Starting services
service nginx start && service php7.3-fpm start && service mysql start

#Creating database
#mysql
echo "CREATE DATABASE wp_db;" | mysql
echo "GRANT ALL ON wp_db.* TO 'admin'@'localhost' IDENTIFIED BY 'admin' WITH GRANT OPTION;"  | mysql
echo "FLUSH PRIVILEGES;"  | mysql

sleep infinity & wait