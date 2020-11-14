<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableCommentItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_item', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('comment_id');

            $table->foreign('item_id')
                ->references('id')->on('items');
            $table->foreign('comment_id')
                ->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment_item', function (Blueprint $table) {
            $table->dropForeign('comment_item_item_id_foreign');
            $table->dropForeign('comment_item_comment_id_foreign');
        });
        Schema::dropIfExists('comment_item');
    }
}
