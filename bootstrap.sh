#!/usr/bin/env bash

apt-add-repository ppa:ondrej/php

apt-get update

apt-get install -y git

apt-get install -y apache2
apt-get install -y libapache2-mod-fcgi

apt-get install -y php7.0
apt-get install -y php7.0-fpm

a2enmod php7.0

service apache2 stop

rm -rf /var/www/html

git clone https://github.com/alexuprise/log-grid.git /var/www/html

service apache2 start

cd /var/www/html

php composer.phar install