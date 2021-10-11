<?php

namespace App\Models;

use App\Domain\Contracts\BookContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable =   BookContract::FILLABLE;
}
