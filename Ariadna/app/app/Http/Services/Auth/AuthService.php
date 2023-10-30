<?php

namespace App\Http\Services\Auth;

use App\Http\DataTransferObjects\Auth\LoginData;
use App\Http\DataTransferObjects\User\SaveData;
use App\Models\User;

interface AuthService
{
    /**
     * @return User
     */
    public function getUser(): mixed;

    /**
     * @param User $user
     * @return string
     */
    public function generateAuthenticationToken(User $user): string;

    /**
     * @param User $user
     * @return void
     */
    public function removeAuthenticationToken(User $user): void;

    /**
     * @param SaveData $data
     * @return array
     */
    public function register(SaveData $data): array;

    /**
     * @param LoginData $data
     * @return array
     */
    public function login(LoginData $data): array;
}
