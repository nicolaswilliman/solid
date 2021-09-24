<?php

class StoreUserRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name' => 'required',
			'email' => 'required|unique:users|email',
			'password' => 'required',
		];
	}
}

class UserService
{
	public function create($userData): User
	{
		return User::create($userData);
	}
}


class UserController 
{
	public function store(StoreUserRequest $request, UserService $userService)
	{
		$user = $userService->create($request->validated())
		return response()->json(['user' => $user], 201);
	}
}