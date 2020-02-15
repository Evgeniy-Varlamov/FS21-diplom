<?php
    //define('PATH_ROOT',  $_SERVER['DOCUMENT_ROOT']);
    const DB_NAME = 'id11870327_mysite';
    const BD_USER_NAME = "id11870327_admin";
    const BD_PASSWORD = "admin";
    const BD_HOST = "localhost";

    spl_autoload_register(
        function($class_name)
        {
            include $_SERVER['DOCUMENT_ROOT'] . "/classes/" . $class_name . '.php';
        }
    );
?>