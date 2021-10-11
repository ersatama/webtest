<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\User\CreateRequest;
use App\Http\Requests\Api\User\UpdateRequest;
use App\Services\UserService;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService  =   $userService;
    }

    /**
     * @throws ValidationException
     */
    public function create(CreateRequest $createRequest)
    {
        return $this->userService->create($createRequest->validated());
    }

    /**
     * @throws ValidationException
     */
    public function update($id, UpdateRequest $updateRequest)
    {
        return $this->userService->update($id,$updateRequest->validated());
    }

    public function getById($id)
    {
        return $this->userService->getById($id);
    }

}
