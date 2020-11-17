<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristics', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');

            $table->text('description');
            $table->integer('length')
                ->index()->nullable();
            $table->integer('height')
                ->index()->nullable();
            $table->integer('width')
                ->index()->nullable();
            $table->integer('mass')
                ->index()->nullable();
            $table->integer('power_watt')
                ->index()->nullable();
            $table->integer('horse_power')
                ->index()->nullable();
            $table->integer('lifting_capacity')
                ->index()->nullable();

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
        Schema::dropIfExists('characteristics');
    }
}
