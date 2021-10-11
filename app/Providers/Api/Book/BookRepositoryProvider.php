<?php

namespace App\Providers\Api\Book;

use App\Domain\Repositories\Book\BookRepositoryInterface;
use App\Domain\Repositories\Book\BookRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class BookRepositoryProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            BookRepositoryInterface::class,
            BookRepositoryEloquent::class
        );
    }

    public function boot()
    {
        //
    }
}
