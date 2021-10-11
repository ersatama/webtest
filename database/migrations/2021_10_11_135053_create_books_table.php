<?php

use App\Domain\Contracts\MainContract;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\BookContract;

class CreateBooksTable extends Migration
{

    public function up()
    {
        Schema::create(BookContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->bigInteger(MainContract::USER_ID);
            $table->string(MainContract::TITLE);
            $table->enum(MainContract::STATUS,[
                MainContract::ON,
                MainContract::OFF
            ])->default(MainContract::ON);
            $table->timestamps();
            $table->index(MainContract::USER_ID);
        });
    }

    public function down()
    {
        Schema::dropIfExists(BookContract::TABLE);
    }
}
