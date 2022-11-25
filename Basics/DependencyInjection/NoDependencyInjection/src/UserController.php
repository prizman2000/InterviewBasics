<?php

namespace App;

use Exception;

class UserController
{
    /**
     * @throws Exception
     */
    public function handle(): string
    {
        $repo = new UserRepository();
        $user = $repo->findByEmail('admin@cmd.su');
        if (empty($user)) {
            throw new Exception('Пользователь не найден!');
        }
        return <<<RESPONCE
Имя пользователя: $user->name
RESPONCE;
    }
}