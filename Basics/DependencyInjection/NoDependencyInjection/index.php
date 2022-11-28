<?php

require_once 'vendor/autoload.php';

use NoDependencyInjection\App\UserController;

try {
    $controller = new UserController();
    echo $controller->handle();
} catch (\Throwable $exception) {
    echo 'Ошибка: ' . $exception->getMessage();
}