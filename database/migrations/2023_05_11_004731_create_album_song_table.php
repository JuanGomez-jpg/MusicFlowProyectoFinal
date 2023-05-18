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
            $table->foreignId('albums_id')->constrained()->onDelete('cascade');
            $table->integer('song_id')->unsigned();

            $table->foreign('song_id')->references('id')->on('songs');
            $table->unique(['albums_id', 'song_id']);

            /*$table->foreignId('song_id')->constrained();
            $table->integer('albums_id');

            $table->foreign('albums_id')->references('id')->on('albums')->onDelete('cascade');
            $table->unique(['albums_id', 'song_id']);*/
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
