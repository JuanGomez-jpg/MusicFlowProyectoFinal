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
            'songName' => 'required|min:4|max:50',
            'songDuration' => 'required|max:10',
            'songLyrics' => 'required|min:5|max:2500'
        ]);

        //$minutes = Carbon::createFromTimestamp($request->songDuration)->format('i:s');

        // Storage
        $songs = new Song();
        $songs->songName = $request->songName;
        $songs->songDuration = $request->songDuration;
        $songs->songLyrics = $request->songLyrics;

        $songs->save();

        // return redirect('/songs');
        return redirect()->route('songs.index')->with('createdSong', 'Ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return view ('songs.song-details', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        return response(view('songs.edit-song', compact('song')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        $request->validate([
            'songName' => 'required|min:4|max:50',
            'songDuration' => 'required|max:10',
            'songLyrics' => 'required|min:5|max:2500'
        ]);

        //$minutes = Carbon::createFromTimestamp($request->songDuration)->format('i:s');

        // Storage
        $song->songName = $request->songName;
        $song->songDuration = $request->songDuration;
        $song->songLyrics = $request->songLyrics;

        $song->save();

        //return redirect()->route('songs.index');
        return redirect()->route('songs.index')->with('editedSong', 'Ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song -> delete();
        return redirect()->route('songs.index')->with('deleteSong', 'Ok');
    }
}
