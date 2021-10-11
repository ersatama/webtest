<?php

namespace App\Domain\Contracts;

class UserContract extends MainContract
{
    const TABLE =   'users';
    const FILLALBE  =   [
        self::NAME,
        self::EMAIL,
        self::EMAIL_VERIFIED_AT,
        self::PASSWORD
    ];

    const HIDDEN    =   [
        self::PASSWORD,
        self::REMEMBER_TOKEN
    ];

    const CASTS =   [
        self::EMAIL_VERIFIED_AT =>  self::DATETIME
    ];
}
