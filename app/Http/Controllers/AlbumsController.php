<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use App\Models\Song;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon; // Biblioteca de manejo de fechas y tiempos

use Image;
use File;

class AlbumsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$albums = Albums::all();
        $user = Auth::user();
        if ($user -> typeUser === 'Artista')
        {
            $albums = Auth::user()->albums()->get();
            return response(view('albums.album',[
                'albums' => $albums,
                'user' => $user]));
        }
        else
        {
            $user_id = $user->id;
            $albums = DB::table('albums')
                ->whereNotIn('id', function($query) use ($user_id) {
                    $query->select('albums_id')
                        ->from('purchases')
                        ->where('user_id', $user_id);
                })
                ->get();
            /*$albums = DB::table('albums')
                ->join('albums_song', 'albums.id', '=', 'albums_song.albums_id')
                ->where('albums_song.user_id', $userId)
                ->select('albums.*')
                ->get();*/
            return response(view('albums.album', compact('albums','user')));
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        Gate::authorize('artist-albums');
        return view('albums.create-album');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('artist-albums');
        //Validation storage
        $request->validate([
            'albumName' => 'required|min:2|max:70',
            'artistName' => 'required|min:2|max:50',
            'year' => 'required|integer|min:1500|max:2023',
            'genre' => 'required|min:4|max:50',
            'coverImg' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|min:10|max:200',
            'price' => 'required|decimal:2'
        ]);

        // Storage
        $albums = new Albums();
        $albums->albumName = $request->albumName;
        $albums->artistName = $request->artistName;
        $albums->year = $request->year;
        $albums->genre = $request->genre;
        $albums->description = $request->description;
        $albums->price = $request->price;

        if ($request->hasFile('coverImg'))
        {
            $filename = $request->coverImg->getClientOriginalName();
            $path = $request->file('coverImg')->storeAs('public/images', $filename);
            $albums->coverImg = $filename;

            $route = Storage::url($path);
            $albums->coverRoute = $route;
            
        }

        $user = Auth::user();
        $albums->user_id = $user->id;
        $albums->save();
        return redirect()->route('albums.index')->with('createdAl', 'Ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(Albums $album)
    {
        $user = Auth::user();
        $songs = Song::get();
        $album->price = number_format($album->price, 2);
        return view('albums.album-details', compact('user','album','songs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Albums $album)
    {
        Gate::authorize('artist-albums');
        $user = Auth::user();
        $auxAlbum = $album;
        $album->price = number_format($album->price, 2);
        return response(view('albums.edit-album', compact('album', 'user')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Albums $album)
    {
        Gate::authorize('artist-albums');
        //Validation storage
        $request->validate([
            'albumName' => 'required|min:2|max:70',
            'artistName' => 'required|min:2|max:50',
            'year' => 'required|integer|min:1500|max:2023',
            'genre' => 'required|min:4|max:50',
            'coverImg' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|min:10|max:200',
            'price' => 'required|decimal:2'
        ]);

        $album->albumName = $request->albumName;
        $album->artistName = $request->artistName;
        $album->year = $request->year;
        $album->genre = $request->genre;
        $album->description = $request->description;
        $album->price = $request->price;

        if ($request->hasFile('coverImg'))
        {
            $filename = $request->coverImg->getClientOriginalName();
            $path = $request->file('coverImg')->storeAs('public/images', $filename);
            $album->coverImg = $filename;

            $route = Storage::url($path);
            $album->coverRoute = $route;
        }

        $album -> save();

        return redirect('/albums/' . $album->id)->with('editedAl', 'Ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Albums $album)
    {
        Gate::authorize('artist-albums');
        $this->authorize('delete');
        $album -> delete();
        return redirect()->route('albums.index')->with('deleteAl', 'Ok');
    }

    /**
     * Adds song to an album
     * 
     * @param \Illuminate\Http\Request
     * @param \App\Models\Albums
     * @return \Illuminate\Http\Response
     */
    public function addSong(Request $request, Albums $album)
    {
        Gate::authorize('artist-albums');
        $album->songs()->sync($request->song_id);
        return redirect()->route('albums.show', $album)->with('updateAlSon', 'Ok');
    }


    public function showCovers()
    {
        $albums = Albums::get();       
        return response(view('albums.album-covers', compact('albums')));
    }


    public function downloadCover(Albums $album)
    {
        $path = Storage::path($album->coverImg);
        $newPath = str_replace('\\', '/', $path);
        $newPath = str_replace('/storage/app/', '/public/storage/images/', $newPath);
        return response()->download($newPath);
    }
}
