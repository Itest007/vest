<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYpOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yp_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id',255)->comment('订单号');
            $table->string('create_by',255)->default('')->comment('创建人');
            $table->longText('items')->comment('已购买的食品');
            $table->integer('integral')->comment('积分');
            $table->integer('status')->comment('状态（100：已完成，101：待发货，102：取消')->default(101);
            $table->date('date')->comment('订单日期');


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
        Schema::dropIfExists('yp_orders');
    }
}
