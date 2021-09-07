<?php

namespace Examples;

class UserController
{
    public function index()
    {
        $users = User::where('created_at', '>=', Carbon::yesterday())->get();
        return response()->json($users);
    }
}
