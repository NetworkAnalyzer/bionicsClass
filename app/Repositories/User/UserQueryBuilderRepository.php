<?php

namespace App\Repositories\User;

use Illuminate\Support\Facades\DB;

class UserQueryBuilderRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        return DB::table('users')->get();
    }
}
