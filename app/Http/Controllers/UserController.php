<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    protected $erpository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        dump([
            'class' => $this->repository,
            'users' => $this->repository->getAll(),
        ]);
    }
}
