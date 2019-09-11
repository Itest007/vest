<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_records', function (Blueprint $table) {
            $table->increments('id');
            // type
            $table->smallInteger('type')->comment('类型');
            // subtype
            $table->string('subtype')->comment('子类型');
            // hour
            $table->smallInteger('hour')->comment('当前hour');
            // 汇率
            $table->string('rate')->comment('汇率');
            // 汇率时间
            $table->date('record_date')->comment('记录的汇率时间');
            $table->unique(['hour', 'record_date','type','subtype']);

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
        Schema::dropIfExists('rate_records');
    }
}
