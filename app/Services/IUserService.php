<?php

namespace App\Services;

interface IUserService
{
    function login(string $user, string $password): bool;

    function isUserExist(string $user): bool;
}
