<?php

namespace App\Domain\Repositories\Book;
use App\Domain\Contracts\MainContract;
use App\Models\Book;

class BookRepositoryEloquent implements BookRepositoryInterface
{
    public function create($data)
    {
        return Book::create($data);
    }

    public function update($id, $data)
    {
        Book::where(MainContract::ID,$id)->update($data);
        return $this->getById($id);
    }

    public function getById($id)
    {
        return Book::where([
            [MainContract::ID,$id],
            [MainContract::STATUS,MainContract::ON]
        ])->first();
    }

    public function getByUserId($userId)
    {
        return Book::where([
            [MainContract::USER_ID,$userId],
            [MainContract::STATUS,MainContract::ON]
        ])->get();
    }

}
