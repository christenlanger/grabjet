This is my submission for the interview hands on assignment.

1. To install the files locally, you need an environment that runs PHP 7.x and MySQL 5.3 or above.
2. Put installer.php and the corresponding archive to a place in your server.
3. Access installer.php and follow instructions courtesy of Duplicator.
4. The site should be restored upon a successful installation.

Known problems on installing to MySQL 5.7 database:

It is possible that MySQL 5.7 might cause errors on installation. As such, it can be worked around by disabling 5.7's strict mode. Edit these two lines into your mysql.ini file:

[mysqld]
sql_mode=IGNORE_SPACE,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION

Make sure to reload before trying again.
