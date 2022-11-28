<?php

require_once 'vendor/autoload.php';

use DependencyInjectionContainer\App\Container;

try {
    $controller = (new Container())->get('controller.user');
    echo $controller->handle();
} catch (\Throwable $exception) {
    echo 'Ошибка: ' . $exception->getMessage();
}