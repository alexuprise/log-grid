#!/usr/bin/env bash

apt-add-repository ppa:ondrej/php

apt-get update

apt-get install -y git

apt-get install -y apache2
apt-get install -y libapache2-mod-fcgi

apt-get install -y php7.0
apt-get install -y php7.0-fpm

a2enmod php7.0

service php7.0-fpm stop
service apache2 stop

ls -la /var/www
ls -la /var/www/html

rm -rf /var/www/html

git clone https://github.com/alexuprise/log-grid.git /var/www/html

service apache2 start
service php7.0-fpm start

cd /var/www/html

php composer.phar install