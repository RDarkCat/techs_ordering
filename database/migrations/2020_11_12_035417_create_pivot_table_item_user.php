<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableItemUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_user', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('user_id');

            $table->foreign('item_id')
                ->references('id')->on('items');
            $table->foreign('user_id')
                ->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_user');
    }
}
