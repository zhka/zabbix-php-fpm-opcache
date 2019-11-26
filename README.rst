Overview
--------
Zabbix template for monitoring opcache in php-fpm

Dependencies
------------

- cgi-fcgi
- php-fpm

Configuration
-------------

Make the script php-fpm-opcache.php executable with command::

> chmod +x php-fpm-opcache.php

Add optional parameter into php-fpm-zabbix.conf::

> php-fpm-opcache.php [PHP-FPM-SOCKET]

