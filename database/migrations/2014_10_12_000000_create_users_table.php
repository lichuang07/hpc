<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('用户id');
            $table->string('name')->comment('登录验证用户名　唯一')->unique();
            $table->string('nickname')->comment('昵称，一般界面显示用这个');
            $table->integer('admin')->comment('用户权限判定越小权限越大，默认为４')->default(4);
            $table->string('avatar')->comment('用户头像地址')->nullable();
            $table->string('email')->comment('用户邮箱地址')->unique();
            $table->string('password')->comment('用户密码hash加密');
            $table->rememberToken()->comment('用户登录是点击记住我生成的token用于记住用户登录状态');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
