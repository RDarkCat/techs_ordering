<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterOrdersTableChangeColumnItemIdToPromoId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_item_id_foreign');
            $table->dropColumn('item_id');
            $table->foreignId('promo_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_promo_id_foreign');
            $table->dropColumn('promo_id');
            $table->foreignId('item_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }
}
