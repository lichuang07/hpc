<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('publics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('发布者id');
            $table->string('title')->comment('公告标题');
            $table->string('body')->comment('公告内容');
            $table->integer('del')->comment('是否已删除')->default(0); //1:删除
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('publics');
    }
}
