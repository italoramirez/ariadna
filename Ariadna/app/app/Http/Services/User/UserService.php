<?php

namespace App\Http\Services\User;

use App\Http\DataTransferObjects\User\GetData;
use App\Http\DataTransferObjects\User\SaveData;
use App\Models\User;

interface UserService {
    public function create(SaveData $data): User;

    public function get(GetData $data): ?User;
}
