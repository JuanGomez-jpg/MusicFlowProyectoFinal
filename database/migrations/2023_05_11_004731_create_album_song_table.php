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
        Schema::create('albums_song', function (Blueprint $table) {
            $table->foreignId('albums_id')->constrained();
            $table->integer('song_id')->unsigned();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('album_song');
    }
};
