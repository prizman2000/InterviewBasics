<?php

require_once 'vendor/autoload.php';

use DependencyInjection\App\Db;
use DependencyInjection\App\UserController;
use DependencyInjection\App\UserRepository;

try {
    $controller = (new UserController())
        ->setUserRepository(
            (new UserRepository())
            ->setDb(
                new Db()
            )
        )
    ;
    echo $controller->handle();
} catch (\Throwable $exception) {
    echo 'Ошибка: ' . $exception->getMessage();
}