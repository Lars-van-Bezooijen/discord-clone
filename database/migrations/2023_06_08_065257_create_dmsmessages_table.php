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
        Schema::create('dmsmessages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dm_id')
                ->references('id')
                ->on('dms');
            $table->foreignId('user_id')
                ->references('id')
                ->on('users');
            $table->string('content');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('audio')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dmsmessages');
    }
};
