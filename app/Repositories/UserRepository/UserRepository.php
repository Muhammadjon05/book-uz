<?php

namespace App\Repositories\UserRepository;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRepository implements IUserRepository
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth-token')->plainTextToken;
            return ['token' => $token];
        }
        throw new \Exception('Invalid credentials');
    }

    public function register(RegisterRequest $request)
    {
        $userData = $request->validated();
        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);
        $token = $user->createToken('auth-token')->plainTextToken;
        return ['token' => $token];

    }
}
