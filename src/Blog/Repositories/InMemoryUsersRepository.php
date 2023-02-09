<?php

namespace Geekbrains\Leveltwo\Blog\Repositories;

use Geekbrains\Leveltwo\Blog\Exceptions\UserNotFoundException;
use Geekbrains\Leveltwo\Blog\User;

class InMemoryUsersRepository
{
    private array $users = [];

    public function save(User $user): void
    {
        $this->users[] = $user;
    }

    public function get(int $id): User
    {
        foreach ($this->users as $user){
            if ($user->id() === $id){
                return $user;
            }
        }
        throw new UserNotFoundException(" User not found: $id");
    }


}