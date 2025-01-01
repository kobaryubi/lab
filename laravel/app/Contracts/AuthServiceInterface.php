<?php

namespace App\Contracts;

use App\Models\User;

interface AuthServiceInterface
{
    /**
     * Register a new user.
     * 
     * @param string $email
     * @param string $password
     * @return User
     */
    public function register(string $email, string $password);
}
