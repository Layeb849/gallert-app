<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Album.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('coverImg')) {
            $coverImg = $request->file('coverImg');
            $coverImgName = time() . '.' . $coverImg->getClientOriginalExtension();
            $coverImg->move(public_path('uploads/coverImg'), $coverImgName);
            $img_url = 'uploads/coverImg/' . $coverImgName;
            // dd($img_url);
        }
        Album::create([
            'name' => $request->name,
            'coverImg' => $img_url
        ]);
        return redirect()->route('album.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        //
    }
}
