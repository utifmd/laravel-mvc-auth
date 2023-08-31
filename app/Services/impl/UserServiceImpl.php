<?php

namespace App\Services\impl;

use App\Services\IUserService;

class UserServiceImpl implements IUserService
{
    private $users = [
        'utifmd' => 'rahasia'
    ];

    function login(string $user, string $password): bool
    {
        if (!isset($this->users[$user])) return false;

        $correctPasswd = $this->users[$user];

        return $password == $correctPasswd;
    }

    function isUserExist(string $user): bool
    {
        return isset($this->users[$user]);
    }
}
