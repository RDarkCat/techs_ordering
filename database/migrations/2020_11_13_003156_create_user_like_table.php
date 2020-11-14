<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_like', function (Blueprint $table) {
            $table->id();
            $table->boolean('like');
            $table->foreignId('user_id');
            $table->foreignId('user_id_from')
                ->comment('Кто поставил оценку');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('user_id_from')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_like', function (Blueprint $table) {
            $table->dropForeign('user_like_user_id_foreign');
            $table->dropForeign('user_like_user_id_from_foreign');
        });
        Schema::dropIfExists('user_like');
    }
}
