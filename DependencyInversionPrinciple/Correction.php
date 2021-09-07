<?php

namespace Corrections;

interface UserRepositoryInterface
{
    public function getFromDate($date);
    public function create(array $data);
}

class UserRepository implements UserRepositoryInterface
{
    public function getFromDate($date)
    {
        return User::where('created_at', '>=', $date)->get();
    }

    public function create(array $data)
    {
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();

        return $user;
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
