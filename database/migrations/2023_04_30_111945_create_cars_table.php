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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained();
            $table->string('car_number')->nullable();
            $table->string('brand')->nullable();
            $table->string('luggage_number')->nullable();
            $table->integer('luggage_capacity')->nullable();
            $table->string('made_date')->nullable();
            $table->string('status')->nullable();
            $table->string('fuel')->nullable();
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
        Schema::dropIfExists('cars');
    }
};