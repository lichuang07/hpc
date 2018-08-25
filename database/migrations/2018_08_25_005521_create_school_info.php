<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolInfo extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('school_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('登录注册id');
            $table->string('name')->comment('姓名');
            $table->string('grade')->comment('年级');
            $table->string('college')->comment('院系');
            $table->string('major')->comment('专业');
            $table->string('othermsg')->comment('备注');
            $table->string('mobile')->comment('手机号码');
            $table->integer('status')->comment('注册状态')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('school_info');
    }
}
