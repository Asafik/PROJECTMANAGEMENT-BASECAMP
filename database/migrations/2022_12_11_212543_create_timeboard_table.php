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
        Schema::create('timeboard', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Time Worked')->nullable();
            $table->text('Doing')->nullable();
            $table->dateTime('Date')->nullable();
            $table->enum('By',['User 1','User 2','User 3'])->nullable();
            $table->enum('Status',['Not Started','Started','Complated'])->nullable();
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
        Schema::dropIfExists('timeboard');
    }
};
