<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Carbon\Carbon; // Biblioteca de manejo de fechas y tiempos

use Image;
use File;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Albums::all();
        $user = Auth::user();

        /*$albums = Albums::find(1);
        $duracionEnSegundos = '280';
        $duracionEnMinutos = Carbon::createFromTimestamp($duracionEnSegundos)->format('i:s');
        
        $cancion1 = new Song(['name' => 'The Battle of Yaldabaoth', 'duration' => $duracionEnMinutos]);

        $duracionEnSegundos = 240;
        $duracionEnMinutos = Carbon::createFromTimestamp($duracionEnSegundos)->format('i:s');

        $cancion2 = new Song(['name' => 'Childchewer', 'duration' => $duracionEnMinutos]);
        $albums->songs()->saveMany([$cancion1, $cancion2]);*/

        return response(view('albums.album',[
            'albums' => $albums,
            'user' => $user]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('albums.create-album');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation Blob
        /*$request->validate([
            'albumName' => 'required|max:70',
            'year' => 'required|integer|min:1500|max:2023',
            'genre' => 'required|max:50',
            'coverName' => 'required|file|mimes:jpg,png,jpeg,map|max:64'
        ]);*/

        // Blob
        /*
        $albums = new Albums();
        $albums->albumName = $request->albumName;
        $albums->year = $request->year;
        $albums->genre = $request->genre;

        if ($request->hasFile('coverName'))
        {
            $imageData = file_get_contents($request->file('coverName'));
            $albums->coverName = $imageData;
        }*/

    
        //Validation storage
        $request->validate([
            'albumName' => 'required|max:70',
            'artistName' => 'required|max:50',
            'year' => 'required|integer|min:1500|max:2023',
            'genre' => 'required|max:50',
            'coverImg' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|max:200'
        ]);


        // Storage
        $albums = new Albums();
        $albums->albumName = $request->albumName;
        $albums->artistName = $request->artistName;
        $albums->year = $request->year;
        $albums->genre = $request->genre;
        $albums->description = $request->description;

        if ($request->hasFile('coverImg'))
        {
            $filename = $request->coverImg->getClientOriginalName();
            $path = $request->file('coverImg')->storeAs('public/images', $filename);
            $albums->coverImg = $filename;
        }


        $albums->save();
        
        //Albums::create($request->all());

        return redirect('/albums');
    }

    /**
     * Display the specified resource.
     */
    public function show(Albums $album)
    {
        $user = Auth::user();
        $songs = Song::all();

        return view('albums.album-details', [
            'album' => $album,
            'user' => $user,
            'songs' => $songs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Albums $album)
    {
        return response(view('albums.edit-album', compact('album')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Albums $album)
    {
        //Validation Blob
        /*
        $request->validate([
            'albumName' => 'required|max:70',
            'year' => 'required|integer|min:1500|max:2023',
            'genre' => 'required|max:50',
            'coverName' => 'required|file|mimes:jpg,png,jpeg,map|max:64'
        ]);

        $album->albumName = $request->albumName;
        $album->year = $request->year;
        $album->genre = $request->genre;

        if ($request->hasFile('coverName'))
        {
            $imageData = file_get_contents($request->file('coverName'));
            $album->coverName = $imageData;
        }
        */

        //Validation storage
        $request->validate([
            'albumName' => 'required|max:70',
            'artistName' => 'required|max:50',
            'year' => 'required|integer|min:1500|max:2023',
            'genre' => 'required|max:50',
            'coverImg' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|max:200'
        ]);

        $album->albumName = $request->albumName;
        $album->artistName = $request->artistName;
        $album->year = $request->year;
        $album->genre = $request->genre;
        $album->description = $request->description;

        if ($request->hasFile('coverImg'))
        {
            $filename = $request->coverImg->getClientOriginalName();
            $path = $request->file('coverImg')->storeAs('public/images', $filename);
            $album->coverImg = $filename;
        }


        $album -> save();

        return redirect('/albums/' . $album->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Albums $album)
    {
        $album -> delete();
        return redirect()->route('albums.index');
    }
}
