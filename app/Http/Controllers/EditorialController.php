<?php

namespace App\Http\Controllers;

use App\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $editorials = Editorial::paginate();
       return view('editorials',['editorials'=> $editorials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createeditorial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
          
        ]);

        $editorial = new Editorial();
        $editorial ->name = $request->name;

        $editorial->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Editorial  $Editorial
     * @return \Illuminate\Http\Response
     */
    public function show(Editorial $Editorial)
    {
        $editorial = Editorial::find($Editorial->id);
        return view('vieweditorial',['editorial'=>$editorial]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Editorial  $Editorial
     * @return \Illuminate\Http\Response
     */
    public function edit(Editorial $editorial)
    {
        $editorial = Editorial::find($editorial->id);
        return view('editeditorial',['editorial'=>$editorial]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Editorial  $Editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editorial $editorial)
    {
        $editorial->name = $request->name;
        $editorial->save();
        return redirect('/editorials/'.$editorial->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Editorial  $Editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editorial $editorial)
    {
        Editorial::destroy($editorial->id);
        return back();
    }
}
