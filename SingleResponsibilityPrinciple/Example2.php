<?php

class UserController 
{
	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required|unique:users|email',
			'password' => 'required',
		]);

		$user = new User;
		$user->name = $request->input('name');
		$user->email = $request->input('email');
		$user->password = bcrypt($request->input('password'));
		$user->save();

		return response()->json(['user' => $user], 201);
	}
}
