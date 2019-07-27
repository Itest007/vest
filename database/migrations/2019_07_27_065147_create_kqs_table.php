<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key',255)->comment('uuid')->default('');
            $table->string('title',255)->comment('title')->default('');
            $table->text('content')->comment('content');
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
        Schema::dropIfExists('kqs');
    }
}
