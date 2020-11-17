<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_like', function (Blueprint $table) {
            $table->id();
            $table->boolean('like');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('user_id_from');
            $table->timestamps();

            $table->foreign('item_id')
                ->references('id')->on('items');
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
        Schema::table('item_like', function (Blueprint $table) {
            $table->dropForeign('item_like_item_id_foreign');
            $table->dropForeign('item_like_user_id_from_foreign');
        });
        Schema::dropIfExists('item_like');
    }
}
