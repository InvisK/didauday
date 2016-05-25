<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_code', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('location_news_id');
            $table->string('amount');
            $table->string('start_words');
            $table->string('promo_value');
            $table->integer('promo_unit_id');
            $table->integer('limit');
            $table->string('keyword');
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
        Schema::drop('location_code');
    }
}
