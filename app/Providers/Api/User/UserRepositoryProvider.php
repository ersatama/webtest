<?php

namespace App\Providers\Api\User;

use Illuminate\Support\ServiceProvider;
use App\Domain\Repositories\User\UserRepositoryEloquent;
use App\Domain\Repositories\User\UserRepositoryInterface;

class UserRepositoryProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepositoryEloquent::class
        );
    }

    public function boot()
    {
        //
    }
}
