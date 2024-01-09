<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('owns', function (Blueprint $table) {
            $table->unsignedBigInteger('thing_id');
            $table->unsignedBigInteger('place_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('amount');
            $table->foreign('thing_id')->references('id')->on('things');
            $table->foreign('place_id')->references('id')->on('places');
            $table->foreign('user_id')->references('id')->on('users');
            $table->primary(['thing_id', 'place_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owns');
    }
};
