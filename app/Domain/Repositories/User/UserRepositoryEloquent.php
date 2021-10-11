<?php

namespace App\Domain\Repositories\User;
use App\Domain\Contracts\MainContract;
use App\Models\User;

class UserRepositoryEloquent implements UserRepositoryInterface
{
    public function create($data)
    {
        return User::create($data);
    }

    public function update($id, $data)
    {
        User::where(MainContract::ID,$id)->update($data);
        return $this->getById($id);
    }

    public function getById($id)
    {
        return User::where(MainContract::ID,$id)->first();
    }

}
