# tooDumb-PHP-framework
tooDumb

This is a simple MVC mini PHP framework created by Rubin Elezi, it will get you started fast if you want to build an PHP app since you have a ready made structure using MVC pattern. To get started refer documentation.

Getting Started

Prerequisites
Apache Server
PHP 5.6+
Mysql Database
Install XAMPP for an easy quickstart

Config File
-Modify the app/config/config.php file according to your needs based on your local settings. 

//Database Configuration
define('DB_HOST', '<databaseHost>');
define('DB_USER', '<databaseUser>');
define('DB_PASS', '<databasePassword>');
define('DB_NAME', '<databaseName>');
Modify it like this

//Database example Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '123456');
define('DB_NAME', 'posts');

-There are olso defined your site name and your url, you can set them acording to your site name.

-Modify che .htaccess file inside the public folder to match the name of your installation folder


-Create a database in PhpMyAdmin matching your database information provided on the config file. 
