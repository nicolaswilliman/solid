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
	public function create(array $userData): User
	{
		$user = new User;
		$user->name = $userData['name'];
		$user->email = $userData['email'];
		$user->password = bcrypt($userData['password']);
		$user->save();
		return $user;
	}
}


class UserResource extends JsonResource
{
	public function toArray()
	{
		return [
			'user_name' => $this->name,
			'email' => $this->email,
		];
	}
}

class UserController 
{
	public function store(StoreUserRequest $request, UserService $userService)
	{
		$user = $userService->create($request->validated());
		return new UserResource($user);
	}
}
