<?php

interface StorableRepository
{
    public function create(array $data): Model;
}

interface ReadableRepository
{
	public function find($id): ?Model;
    public function all(): Collection;
}

interface DeletableRepository
{
    public function delete($id): void;
}

interface UpdatableRepository
{
    public function update(array $data, $id): Model;
}

class UserRepository implements StorableRepository, ReadableRepository, DeletableRepositoryUpdatableRepository
{
	// ...
}

class LogRepository implements StorableRepository, ReadableRepository
{
	// ...
}