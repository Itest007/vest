<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYpOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yp_order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id',255)->comment('订单号');
            $table->string('item_code',255)->comment('食品代号');
            $table->string('num',255)->comment('食品数量');
            $table->integer('integral')->comment('总的食品积分');
            $table->integer('status')->comment('状态（100：已完成，101：待发货，102：取消')->default(101);


            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yp_order_items');
    }
}
