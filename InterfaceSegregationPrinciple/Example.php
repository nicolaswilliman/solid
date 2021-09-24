<?php

interface Repository {
    public function find($id): ?Model;
    public function all(): Collection;
    public function create(array $data): Model;
    public function update(array $data, $id): Model;
    public function delete($id): void;
}

class UserRepository implements Repository 
{
    public function find($id): ?Model
    {
        return User::find($id);
    }

    public function create(array $data): Model
    {
        return User::create($data);
    }

    // ...
}

class LogRepository implements Repository
{
    public function find($id): Model
    {
        return User::find($id);
    }

    public function all(): Collection;
    {
        return User::all();
    }

    public function delete($id)
    {
        throw new Exception('Los logs no pueden ser borrados.');
    }
}
