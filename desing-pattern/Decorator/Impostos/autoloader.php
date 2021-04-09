<?php

spl_autoload_register(function ($class_name) {
    $parts = explode('\\', $class_name);

    $directorys = ['Class', 'Interface'];

    foreach ($directorys as $directory) {
        $file = $directory  . '/' . end($parts) . '.php';

        if (file_exists($file))
        require_once $file ;
    }


});
