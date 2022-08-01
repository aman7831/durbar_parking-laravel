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
        Schema::create('reserve_parkings', function (Blueprint $table) {
            $table->id();
            
            $table->string('vehicle_name')->nullable();
            $table->string('vehicle_number')->nullable();
            $table->string('parkinglot')->nullable();
            $table->string('date')->nullable();
            $table->string('from_time')->nullable();
            $table->string('to_time')->nullable();


            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('parkinglotid')->nullable();
            $table->foreign('parkinglotid')->references('id')->on('parkinglots');
            
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
        Schema::dropIfExists('reserve_parkings');
    }
};
