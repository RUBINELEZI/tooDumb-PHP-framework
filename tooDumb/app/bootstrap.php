<?php
// Load Config
require_once 'config/config.php';

// AUTO LOAD LIBRARIES
spl_autoload_register(function ($className){
    require_once 'libraries/' . $className . '.php';
});