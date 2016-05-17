<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_districts', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('type_name');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('province_id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('address_districts');
    }
}
