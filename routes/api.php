<?php

use App\Domain\Contracts\BookContract;
use App\Domain\Contracts\UserContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BookController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix(UserContract::TABLE)->group(function() {
    Route::post('update/{id}',[UserController::class,'update'])->name('users.update');
    Route::post('create',[UserController::class,'create'])->name('users.create');
    Route::get('getById/{id}',[UserController::class,'getById'])->name('users.getById');
});

Route::prefix(BookContract::TABLE)->group(function() {
    Route::post('create',[BookController::class,'create'])->name('books.create');
    Route::post('update/{id}',[BookController::class,'update'])->name('books.update');
    Route::get('getByUserId/{userId}',[BookController::class,'getByUserId'])->name('books.getByUserId');
    Route::get('getById/{id}',[BookController::class,'getById'])->name('books.getById');
});
