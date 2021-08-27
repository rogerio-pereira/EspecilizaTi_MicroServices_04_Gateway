<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(Request $request)
    {
        return $this->authService->login($request->all());
    }

    public function me()
    {
        return $this->authService->getMe([
            'Authorization' => request()->header('Authorization')
        ]);
    }

    public function logout()
    {
        return $this->authService->logout([
                        'Authorization' => request()->header('Authorization')
                    ]);
    }
}
