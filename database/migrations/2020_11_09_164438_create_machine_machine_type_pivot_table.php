<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachineMachineTypePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine_machine_type', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('machine_id')->unsigned();
            $table->bigInteger('machine_type_id')->unsigned();
            $table->timestamps();
            $table->foreign('machine_id')->references('id')->on('machines');
            $table->foreign('machine_type_id')->references('id')->on('machines_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machine_machine_type');
    }
}
