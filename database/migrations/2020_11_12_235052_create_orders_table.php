<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('count')
                ->comment('Количество заказываемой техники');
            $table->text('delivery_address');
            $table->string('contact_phone', 50);
            $table->unsignedBigInteger('user_id')
                ->nullable();
            /*
             * TODO убрать nullable
             */
            $table->unsignedBigInteger('promo_id');
            $table->text('comment')
                ->nullable();

            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('promo_id')
                ->references('id')->on('promos');
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
            $table->dropForeign('orders_user_id_foreign');
            $table->dropForeign('orders_promo_id_foreign');
        });

        Schema::dropIfExists('orders');
    }
}
