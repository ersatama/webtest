<?php

use App\Domain\Contracts\MainContract;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Contracts\UserContract;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create(UserContract::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(MainContract::NAME);
            $table->string(MainContract::EMAIL)->unique();
            $table->timestamp(MainContract::EMAIL_VERIFIED_AT)->nullable();
            $table->string(MainContract::PASSWORD);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(UserContract::TABLE);
    }
}
