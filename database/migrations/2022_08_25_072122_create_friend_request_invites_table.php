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
        Schema::create('friend_request_invites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender');
            $table->foreignId('target');
            $table->string('message');
            $table->timestamps();

            $table->foreign('sender')->references('id')->on('users');
            $table->foreign('target')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friend_request_invites');
    }
};
