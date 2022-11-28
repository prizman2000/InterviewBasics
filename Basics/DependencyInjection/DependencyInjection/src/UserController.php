<?php

namespace DependencyInjection\App;

use Exception;

class UserController
{
    private UserRepository $userRepository;

    public function setUserRepository(UserRepository $userRepository): self
    {
        $this->userRepository = $userRepository;
        return $this;
    }

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