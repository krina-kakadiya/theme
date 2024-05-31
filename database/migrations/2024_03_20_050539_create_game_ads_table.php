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
        Schema::create('game_ads', function (Blueprint $table) {
            $table->id();
            $table->string('game_name');
            $table->string('game_code');
            $table->text('interstitial_ads');
            $table->text('banner_ads');
            $table->text('native_ads');
            $table->text('video_ads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_ads');
    }
};
