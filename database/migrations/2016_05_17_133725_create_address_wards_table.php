<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_wards', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('type_name');
            $table->string('location_point');
            $table->string('district_id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('address_wards');
    }
}
