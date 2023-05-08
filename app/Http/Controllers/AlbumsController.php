<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;
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
        return response(view('albums.album', compact('albums')));
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
            'coverImg' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);


        // Storage
        $albums = new Albums();
        $albums->albumName = $request->albumName;
        $albums->artistName = $request->artistName;
        $albums->year = $request->year;
        $albums->genre = $request->genre;

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
        return view('albums.album-details', compact('album'));
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
            'coverImg' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $album->albumName = $request->albumName;
        $album->artistName = $request->artistName;
        $album->year = $request->year;
        $album->genre = $request->genre;

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
