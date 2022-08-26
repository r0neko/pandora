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
        Schema::create('friend_relationships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('friend');
            $table->foreignId('friendee');
            $table->timestamps();

            $table->foreign('friend')->references('id')->on('users');
            $table->foreign('friendee')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friend_relationships');
    }
};
