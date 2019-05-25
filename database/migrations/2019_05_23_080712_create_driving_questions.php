<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrivingQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driving_questions', function (Blueprint $table) {
            // students为表名称
                // 存储引擎
                $table->engine = 'InnoDB';
                // id自增
                $table->increments('id');
                // type
                $table->smallInteger('type')->comment('类型');
                // qid
                $table->string('qid')->comment('题目id');
                // 问题
                $table->text('question')->comment('问题');
                // 答案
                $table->string('answer')->comment('答案');
                // 选项1
                $table->string('item1')->comment('选项1');
                //  选项2
                $table->string('item2')->comment('选项2');
                //  选项3
                $table->string('item3')->comment('选项3');
                //  选项4
                $table->string('item4')->comment('选项4');
                // 解释
                $table->text('explains')->comment('问题解释');
                // 地址
                $table->string('url')->comment('地址');

                // 自动维护时间戳
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
        Schema::dropIfExists('driving_questions');
    }
}
