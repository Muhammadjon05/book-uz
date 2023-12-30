<?php

namespace App\Repositories\UserRepository;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

interface IUserRepository
{
    public function login(LoginRequest $request);

    public function register(RegisterRequest $request);



}
