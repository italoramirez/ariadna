<?php

namespace App\Http\Repositories\User\Impl;

use App\Http\DataTransferObjects\User\GetData;
use App\Http\Repositories\User\UserRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserRepositoryImpl implements UserRepository
{
    /**
     * @param GetData $data
     * @return User|Model|null
     */
    public function get(GetData $data): null|User|Model
    {
        return User::whereEmail($data->email)
            ->firstOrFail();
    }

    /**
     * @param $data
     * @return User
     */
    public function save($data): User
    {
        return User::updateOrCreate([
            'email' => $data->email
        ], $data->toArray());
    }
}
