<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryRegionPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_region', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country_id')->unsigned();
            $table->bigInteger('region_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_region');
    }
}
