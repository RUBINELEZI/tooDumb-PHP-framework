# tooDumb-PHP-framework
tooDumb <br />

This is a simple MVC mini PHP framework created by Rubin Elezi, it will get you started fast if you want to build an PHP app since you have a ready made structure using MVC pattern. To get started refer documentation.

Getting Started <br />

Prerequisites <br />
Apache Server <br />
PHP 5.6+ <br />
Mysql Database <br />
Install XAMPP for an easy quickstart <br />

Config File <br />
-Modify the app/config/config.php file according to your needs based on your local settings. <br />

//Database Configuration <br />
define('DB_HOST', 'databaseHost'); <br />
define('DB_USER', 'databaseUser'); <br />
define('DB_PASS', 'databasePassword'); <br />
define('DB_NAME', 'databaseName'); <br />
Modify it like this

//Database example Configuration <br />
define('DB_HOST', 'localhost'); <br />
define('DB_USER', 'root'); <br />
define('DB_PASS', '123456'); <br />
define('DB_NAME', 'posts');

-There are olso defined your site name and your url, you can set them acording to your site name. <br />

-Modify che .htaccess file inside the public folder to match the name of your installation folder. <br />


-Create a database in PhpMyAdmin matching your database information provided on the config file. <br />
