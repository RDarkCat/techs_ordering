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
            $table->enum('status', ['open', 'close'])->default('open');
            $table->integer('price_per_hour')
                ->index()->default(null);
            $table->integer('prise_per_day')
                ->index()->default(null);
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
