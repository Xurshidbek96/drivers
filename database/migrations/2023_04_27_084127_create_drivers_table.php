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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->integer('id_card')->nullable();
            $table->string('name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('type')->nullable();
            $table->string('workplace')->nullable();
            $table->string('exprience')->nullable();
            $table->string('img')->nullable();
            $table->date('member_date_uztracking')->nullable();
            $table->integer('distance_uztracking')->nullable();
            $table->string('phone')->nullable();
            $table->string('pasport_copy')->nullable();
            $table->string('sertificate_copy')->nullable();
            $table->string('workbook_copy')->nullable();
            $table->string('car_document')->nullable();
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
        Schema::dropIfExists('drivers');
    }
};