<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableItemManufacturerCountry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_manufacturer_country', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('manufacturer_country_id');

            $table->foreign('item_id')
                ->references('id')->on('items');
            $table->foreign('manufacturer_country_id')
                ->references('id')->on('manufacturer_countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_manufacturer_country', function (Blueprint $table) {
            $table->dropForeign('item_manufacturer_country_item_id_foreign');
            $table->dropForeign('item_manufacturer_country_manufacturer_country_id_foreign');
        });
        Schema::dropIfExists('item_manufacturer_country');
    }
}
