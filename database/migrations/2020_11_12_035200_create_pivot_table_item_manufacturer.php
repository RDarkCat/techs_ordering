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
        Schema::dropIfExists('item_manufacturer');
    }
}
