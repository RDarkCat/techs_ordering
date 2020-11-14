<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableItemMovementType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_movement_type', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('movement_type_id');

            $table->foreign('item_id')
                ->references('id')->on('items');
            $table->foreign('movement_type_id')
                ->references('id')->on('movement_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_movement_type', function (Blueprint $table) {
            $table->dropForeign('item_movement_type_item_id_foreign');
            $table->dropForeign('item_movement_type_movement_type_id_foreign');
        });
        Schema::dropIfExists('item_movement_type');
    }
}
