<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableItemType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_type', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('type_id');

            $table->foreign('item_id')
                ->references('id')->on('items');
            $table->foreign('type_id')
                ->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_type', function (Blueprint $table) {
            $table->dropForeign('item_type_item_id_foreign');
            $table->dropForeign('item_type_type_id_foreign');
        });
        Schema::dropIfExists('item_type');
    }
}
