<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYpItemIntegralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yp_item_integrals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->comment('食品名称');
            $table->string('item_code',255)->comment('食品代号');
            $table->mediumInteger('type')->comment('食品类型');
            $table->mediumInteger('is_special')->default(0)->comment('特供标识');
            $table->integer('integral')->comment('食品积分');
            $table->index(['type']);
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
        Schema::dropIfExists('yp_item_integrals');
    }
}
