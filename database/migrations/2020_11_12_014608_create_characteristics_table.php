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
            $table->id();
            $table->foreignId('item_id');

            $table->text('description')->comment('Описание');
            $table->integer('length')->comment('Длинна')
                ->index()->default(null);
            $table->integer('height')->comment('Высота')
                ->index()->default(null);
            $table->integer('width')->comment('Ширина')
                ->index()->default(null);
            $table->integer('mass')->comment('Масса')
                ->index()->default(null);
            $table->integer('power_watt')->comment('Мощьность в Ватт')
                ->index()->default(null);
            $table->integer('power_hp')->comment('Мощьность в лошадиных силах')
                ->index()->default(null);
            $table->integer('power_kg')->comment('Грозоподъёмность')
                ->index()->default(null);
            $table->integer('price_ph')->comment('Цена в час')
                ->index()->default(null);
            $table->integer('prise_pd')->comment('Цена в сутки')
                ->index()->default(null);

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
