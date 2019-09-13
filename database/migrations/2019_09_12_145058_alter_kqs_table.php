<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterKqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kqs', function (Blueprint $table) {
            //
            $table->bigInteger('create_by')->default(0)->comment('创建者id,默认为0（admin）');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kqs', function (Blueprint $table) {
            //
        });
    }
}
