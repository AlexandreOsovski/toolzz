<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Storage;



class UserService
{
    protected $repository;

    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }

    public function getByUser(string $user): ?User
    {
        return $this->repository->getByUser($user);
    }

    public function create(array $data): bool
    {
        $user = $this->repository->create(new User([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]));

        return $user ? true : false;
    }

    public function find(string $id): ?User
    {
        return $this->repository->find($id);
    }
}
