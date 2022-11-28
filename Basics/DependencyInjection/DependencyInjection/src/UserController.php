<?php

namespace DependencyInjection\App;

use Exception;

class UserController
{
    public function __construct(
        private readonly UserRepository $userRepository
    )
    {}

    /**
     * @throws Exception
     */
    public function handle(): string
    {
        $user = $this->userRepository->findByEmail('admin@cmd.su');
        if (empty($user)) {
            throw new Exception('Пользователь не найден!');
        }
        return <<<RESPONCE
Имя пользователя: $user->name
RESPONCE;
    }
}