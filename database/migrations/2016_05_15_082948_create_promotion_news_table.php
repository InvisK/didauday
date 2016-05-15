<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('key');
            $table->date('begin_date');
            $table->date('end_date');
            $table->string('provider_id');
            $table->text('content');
            $table->string('image');
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
        Schema::drop('promotion_news');
    }
}
