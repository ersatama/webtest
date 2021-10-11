<?php

namespace App\Services;

use App\Domain\Repositories\User\UserRepositoryInterface;

class UserService
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository   =   $userRepository;
    }

    public function create($data)
    {
        return $this->userRepository->create($data);
    }

    public function update($id, $data)
    {
        return $this->userRepository->update($id, $data);
    }

    public function getById($id)
    {
        return $this->userRepository->getById($id);
    }

}
