<?php

namespace App\Http\Services\Auth\Impl;

use App\Http\DataTransferObjects\Auth\LoginData;
use App\Http\DataTransferObjects\User\GetData;
use App\Http\DataTransferObjects\User\SaveData;
use App\Http\Services\Auth\AuthService;
use App\Http\Services\User\UserService;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthServiceImpl implements AuthService
{
    public function __construct(protected UserService $userService)
    {
    }

    /**
     * @return User
     */
    public function getUser(): mixed
    {
        return Auth::user();
    }

    /**
     * @param User $user
     * @return string
     */
    public function generateAuthenticationToken(User $user): string
    {
        $user->tokens()->whereName('api-token')->delete();
        return $user->createToken('api-token')->plainTextToken;
    }

    /**
     * @param User $user
     * @return void
     */
    public function removeAuthenticationToken(User $user): void
    {
        $user->currentAccessToken()->delete();
    }

    /**
     * @param SaveData $data
     * @return array
     */
    public function register(SaveData $data): array
    {
        $user = $this->userService->create($data);
        $token = $this->generateAuthenticationToken($user);
        return [
            'user' => $user,
            'token' => $token
        ];
    }

    /**
     * @param LoginData $data
     * @return array
     */
    public function login(LoginData $data): array
    {
        $user = $this->userService->get(GetData::from(['email' => $data->email]));
        if(!Hash::check($data->password, $user->password)){
            abort(422, "Datos incorrectos");
        }
        $token = $this->generateAuthenticationToken($user);
        return [
            'user' => $user,
            'token' => $token
        ];
    }
}
