<?php
    //define('PATH_ROOT',  $_SERVER['DOCUMENT_ROOT']);
    const DB_NAME = 'cw24054_qamid';
    const BD_USER_NAME = "cw24054_qamid";
    const BD_PASSWORD = "TvmT01UOV5fN";
    const BD_HOST = "localhost";

    spl_autoload_register(
        function($class_name)
        {
            include $_SERVER['DOCUMENT_ROOT'] . "/classes/" . $class_name . '.php';
        }
    );
?>