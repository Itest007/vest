<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('app_id',255)->comment('app_id');
            $table->string('channel_id',255)->default('')->comment('渠道号');
            $table->string('os',255)->comment(' Android, IOS');
            $table->integer('status')->comment('状态（100：显示过审内容，101：加载url字段的链接并显示，102：显示本地H5')->default(100);
            $table->string('link',255)->comment('跳转地址');
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
        Schema::dropIfExists('items');
    }
}
