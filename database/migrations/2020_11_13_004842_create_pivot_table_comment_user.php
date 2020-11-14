<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableCommentUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_user', function (Blueprint $table) {
            $table->foreignId('comment_id');
            $table->foreignId('user_id');

            $table->foreign('comment_id')
                ->references('id')->on('comments');
            $table->foreign('user_id')
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
        Schema::table('comment_user', function (Blueprint $table) {
            $table->dropForeign('comment_user_comment_id_foreign');
            $table->dropForeign('comment_user_user_id_foreign');
        });
        Schema::dropIfExists('comment_user');
    }
}
