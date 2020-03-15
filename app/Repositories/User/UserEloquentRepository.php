<?php

namespace App\Repositories\User;

use App\User;

class UserEloquentRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        return User::all();
    }
}
