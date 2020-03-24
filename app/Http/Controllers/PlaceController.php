<?php

namespace App\Http\Controllers;

use App\Place;
use App\Book;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::paginate();
        $books = Book::all();
        return view('places',['places' => $places,'books' => $books
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createplace');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $place = new Place();
        $place->name = $request->name;
       
        $place->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        $place = Place::find($place->id);

        return view('viewPlaces',['place' => $place]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        $place = Place::find($place->id);
        return view('editplaces',['place'=>$place]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:places,name,'.$place->id,
            
        ]);
        
        $place->name = $request->name;
        $place->save();
        return redirect('/places/'.$place->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        Place::destroy($place->id);
        //$book = Book::find($id);
        //$book->delete();
        return back();
    }
    public function showJson( $id)
    {
        $place = Place::with('books.editorial')->find($id);

        return $place;
    }
}
