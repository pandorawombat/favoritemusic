<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Band;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!$request->band_id){
            $albums = Album::all();
        } else {
            $albums = Album::where('band_id',$request->band_id)->get();
        }
        $band_id = $request->band_id;
        
        $bands = Band::pluck('name','id')->all();
        return view('albums.index',compact('albums','bands','band_id'));
    }
    
    public function filtered(Request $request){
        return redirect()->route('albums.index',$request->band_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bands = Band::pluck('name','id')->all();
        return view('albums.create',compact('bands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'band_id'=>'required|integer|min:1'
        ]);
        
        $album = Album::create($request->all());
        return redirect("/albums/$album->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::find($id);
        return view('albums.show',compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);
        $bands = Band::pluck('name','id')->all();
        return view('albums.edit',compact('album','bands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'band_id'=>'required|integer|min:1'
        ]);
        
        $album = Album::find($id);
        $album->update($request->all());
        return redirect("/albums/$album->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Album::destroy($id);
        return redirect(route('albums.index'));
    }
}
