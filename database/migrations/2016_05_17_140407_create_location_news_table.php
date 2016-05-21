<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_news', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('location_id');
            $table->string('title');
            $table->string('body');
            $table->string('photo_list');
            $table->string('keyword');
            $table->string('promotion_start_date');
            $table->string('promotion_end_date');
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
        Schema::drop('location_news');
    }
}
