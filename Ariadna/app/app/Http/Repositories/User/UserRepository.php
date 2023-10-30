<?php

namespace App\Http\Repositories\User;

use App\Http\DataTransferObjects\User\GetData;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

interface UserRepository
{
    /**
     * @param GetData $data
     * @return User|Model|null
     */
    public function get(GetData $data): null|User|Model;

    /**
     * @param $data
     * @return User
     */
    public function save($data): User;
}
