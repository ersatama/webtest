<?php

namespace App\Domain\Contracts;

class BookContract extends MainContract
{
    const TABLE =   'books';
    const FILLABLE  =   [
        self::USER_ID,
        self::TITLE,
        self::STATUS
    ];
}
