<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableItemApplicationScope extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_application_scope', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('application_scope_id');

            $table->foreign('item_id')
                ->references('id')->on('items');
            $table->foreign('application_scope_id')
                ->references('id')->on('application_scopes');

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
        Schema::dropIfExists('item_application_scope');
    }
}
