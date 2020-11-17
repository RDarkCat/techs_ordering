<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableItemTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('tag_id');

            $table->foreign('item_id')
                ->references('id')->on('items');
            $table->foreign('tag_id')
                ->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_tag', function (Blueprint $table) {
            $table->dropForeign('item_tag_item_id_foreign');
            $table->dropForeign('item_tag_tag_id_foreign');
        });
        Schema::dropIfExists('item_tag');
    }
}
