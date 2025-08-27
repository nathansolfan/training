<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CrudService
{
    public function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        $userService = User::create($data);
        return $userService;
    }

    public function allUsers()
    {
        $allUsers = User::all();
        return $allUsers;
    }

    // public function getUser(User $user)
    // {
    //     return $user;
    // }

    public function getUser($id)
    {
        return $id;
    }
}