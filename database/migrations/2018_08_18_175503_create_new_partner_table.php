<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewPartnerTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('new_partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('yuan');
            $table->string('mobile');
            $table->string('msg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('new_partners');
    }
}
