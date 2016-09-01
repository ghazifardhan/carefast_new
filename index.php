<?php
session_start();
// define configurations
define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

function __autoload($className) {

    $fileName = str_replace("\\", DS, $className) . '.php';

    if(!file_exists($fileName)) {

        return false;
    }

    include $fileName;
}

?>