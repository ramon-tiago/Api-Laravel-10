<?php

namespace App\Services\Closeds\Backoffice;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function index(): Collection
    {
        return User::get();
    }

    public function show($id): ?User
    {
        return User::findOrfail($id);
    }

    public function store(array $data): User
    {
        $result = User::create($data);
        return $result;
    }

    public function update(array $data, int $id): User
    {
        $user = $this->show($id);
        $user->update($data);
        return $user->refresh();
    }

    public function destroy(int $id): bool
    {
        $user = $this->show($id);
        return $user->delete();
    }
}
