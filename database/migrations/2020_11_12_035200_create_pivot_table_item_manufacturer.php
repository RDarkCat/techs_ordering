<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableItemManufacturer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_manufacturer', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('manufacturer_id');

            $table->foreign('item_id')
                ->references('id')->on('items');
            $table->foreign('manufacturer_id')
                ->references('id')->on('manufacturers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_manufacturer', function (Blueprint $table) {
            $table->dropForeign('item_manufacturer_item_id_foreign');
            $table->dropForeign('item_manufacturer_manufacturer_id_foreign');
        });
        Schema::dropIfExists('item_manufacturer');
    }
}
