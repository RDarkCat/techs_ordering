<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableItemDimension extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_dimension', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('dimension_id');

            $table->foreign('item_id')
                ->references('id')->on('items');
            $table->foreign('dimension_id')
                ->references('id')->on('dimensions');

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
        Schema::dropIfExists('item_dimension');
    }
}
