<?php

spl_autoload_register(function ($class_name) {
    $parts = explode('\\', $class_name);

    require_once $parts[1] . '/' . end($parts) . '.php';
});
