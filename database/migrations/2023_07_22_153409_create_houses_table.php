<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('city');
            $table->string('area');
            $table->string('block');
            $table->string('road');
            $table->string('plot');
            $table->integer('no_of_floors');
            $table->integer('unit_per_floor');
            $table->integer('total_units');
            $table->integer('floorId');
            $table->integer('unitId');
            $table->rememberToken();
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
        Schema::dropIfExists('houses');
    }
};
