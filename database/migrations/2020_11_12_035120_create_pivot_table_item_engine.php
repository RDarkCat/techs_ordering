<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableItemEngine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_engine', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('engine_id');

            $table->foreign('item_id')
                ->references('id')->on('items');
            $table->foreign('engine_id')
                ->references('id')->on('engines');

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
        Schema::dropIfExists('item_engine');
    }
}
