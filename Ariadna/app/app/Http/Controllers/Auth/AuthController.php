<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\Auth\LoginData;
use App\Http\DataTransferObjects\User\SaveData;
use App\Http\Services\Auth\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @param AuthService $authService
     */
    public function __construct(protected AuthService $authService)
    {
    }

    /**
     * @param Request $request
     * @return array
     */
    public function register(Request $request): array
    {
        return $this->authService->register(SaveData::from($request));
    }

    /**
     * @return mixed
     */
    public function getUser(): mixed
    {
        return $this->authService->getUser();
    }

    /**
     * @param Request $request
     * @return array
     */
    public function login(Request $request): array
    {
        return $this->authService->login(LoginData::from($request));
    }

    /**
     * @return void
     */
    public function logout(): void
    {
        $this->authService->removeAuthenticationToken(request()->user());
    }
}
