<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\Book\CreateRequest;
use App\Http\Requests\Api\Book\UpdateRequest;
use App\Services\BookService;
use Illuminate\Validation\ValidationException;

class BookController extends Controller
{
    protected $bookService;
    public function __construct(BookService $bookService)
    {
        $this->bookService  =   $bookService;
    }

    /**
     * @throws ValidationException
     */
    public function create(CreateRequest $createRequest)
    {
        return $this->bookService->create($createRequest->validated());
    }

    /**
     * @throws ValidationException
     */
    public function update($id, UpdateRequest $updateRequest)
    {
        return $this->bookService->update($id, $updateRequest->validated());
    }

    public function getById($id)
    {
        return $this->bookService->getById($id);
    }

    public function getByUserId($userId)
    {
        return $this->bookService->getByUserId($userId);
    }

}
