<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachineOwnerPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine_owner', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('machine_id')->unsigned();
            $table->bigInteger('owner_id')->unsigned();
            $table->timestamps();
            $table->foreign('machine_id')->references('id')->on('machines');
            $table->foreign('owner_id')->references('id')->on('owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machine_owner');
    }
}
