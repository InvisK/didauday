<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('type_id');
            $table->string('name');
            $table->string('avatar');
            $table->string('logo');
            $table->string('description_short');
            $table->string('description_detail');
            $table->string('gallery');
            $table->string('email');
            $table->string('phone_number');
            $table->integer('address_ward_id');
            $table->integer('address_district_id');
            $table->integer('address_province_id');
            $table->string('url');
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
        Schema::drop('locations');
    }
}
