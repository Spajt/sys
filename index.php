<?php
include 'resources/config.php';
spl_autoload_register(function ($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class).".php";
});

$go = new libs\SpajtFramework\Router();
?>
