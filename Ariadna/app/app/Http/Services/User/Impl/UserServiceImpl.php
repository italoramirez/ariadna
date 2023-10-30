<?php

namespace App\Http\Services\User\Impl;

use App\Http\DataTransferObjects\User\GetData;
use App\Http\DataTransferObjects\User\SaveData;
use App\Http\Repositories\User\UserRepository;
use App\Http\Services\User\UserService;
use App\Models\User;

class UserServiceImpl implements UserService {
    /**
     * @param UserRepository $userRepository
     */
    public function __construct(protected UserRepository $userRepository)
    {
    }

    /**
     * @param SaveData $data
     * @return User
     */
    public function create(SaveData $data): User
    {
        return $this->userRepository->save($data);
    }

    /**
     * @param GetData $data
     * @return User|null
     */
    public function get(GetData $data): ?User
    {
        return $this->userRepository->get($data);
    }
}
