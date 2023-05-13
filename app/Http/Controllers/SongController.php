<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Albums;
use Illuminate\Http\Request;

use Carbon\Carbon; // Biblioteca de manejo de fechas y tiempos


class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all();

        return response(view('songs.song', [
            'songs' => $songs]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('songs.create-song');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'songName' => 'required|max:50',
            'songDuration' => 'required|max:10',
            'songLyrics' => 'required|max:2500'
        ]);

        $minutes = Carbon::createFromTimestamp($request->songDuration)->format('i:s');

        // Storage
        $songs = new Song();
        $songs->songName = $request->songName;
        $songs->songDuration = $minutes;
        $songs->songLyrics = $request->songLyrics;

        $songs->save();

        return redirect('/songs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }
}
