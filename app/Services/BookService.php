<?php

namespace App\Services;

use App\Domain\Repositories\Book\BookRepositoryInterface;

class BookService
{
    protected $bookRepository;
    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository   =   $bookRepository;
    }

    public function create($data)
    {
        return $this->bookRepository->create($data);
    }

    public function update($id, $data)
    {
        return $this->bookRepository->update($id, $data);
    }

    public function getById($id)
    {
        return $this->bookRepository->getById($id);
    }

    public function getByUserId($userId)
    {
        return $this->bookRepository->getByUserId($userId);
    }

}
