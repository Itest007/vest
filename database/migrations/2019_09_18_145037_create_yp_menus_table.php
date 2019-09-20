<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYpMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yp_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_code',255)->comment('食品代号');
            $table->mediumInteger('item_type')->comment('食品类型');
            $table->date('date')->comment('菜单时间');

            $table->unique(['item_code', 'item_type','date']);
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
        Schema::dropIfExists('yp_menus');
    }
}
