<?php

namespace App\Models;

use App\Domain\Contracts\UserContract;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = UserContract::FILLALBE;
    protected $hidden = UserContract::HIDDEN;
    protected $casts = UserContract::CASTS;
}
