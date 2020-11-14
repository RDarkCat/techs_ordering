<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id');
            $table->boolean('status')
                ->nullable();
            $table->integer('price_per_hour')
                ->nullable()->index();
            $table->integer('priсe_per_day')
                ->nullable()->index();
            $table->timestamps();

            $table->foreign('item_id')
                ->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('promos', function (Blueprint $table) {
            $table->dropForeign('promos_item_id_foreign');
        });
        Schema::dropIfExists('promos');
    }
}
