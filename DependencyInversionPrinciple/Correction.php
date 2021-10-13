<?php

interface UserRepositoryInterface
{
    public function getFromDate($date);
}

class UserRepository implements UserRepositoryInterface
{
    public function getFromDate($date)
    {
        return User::where('created_at', '>=', $date)->get();
    }
}


class UserController
{
    public function index(UserRepositoryInterface $repository)
    {
        $users = $repository->getFromDate(Carbon::yesterday());
        return response()->json($users);
    }
}
