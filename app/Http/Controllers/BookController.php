<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Place;

class BookController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny',Book::class);
        $books = Book::paginate();
        $places = Place::all();
        return view('books',['books' => $books,'places' => $places
    ]);
    }
    public function forget(Request $request)
    {
        $request->session()->forget('lastbook');
        $request->session()->forget('books');
        return back();
    }
    public function show($id,Request $request)
    {
       
        $book = Book::find($id);
        $this->authorize('view',$book);
        $request->session()->put('lastbook',$book);
        $books = $request->session()->get('books');
        if(!$books){
            $books = array();
        }
        $books[] = $book;
        $request->session()->put('books',$books);
        return view('viewBook',['book' => $book]);
    }
    public function create()
    {
        $places = Place::all();
        return view('createbook',['places' => $places]);
    }
    public function destroy($id)
    {
        $book = Book::find($id);
        $this->authorize('delete',$book);
        Book::destroy($book);
        //$book = Book::find($id);
        //$book->delete();
        return back();
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'place_id' => 'required|exists:places,id',
        ]);
            dd($validatedData);
       
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->place_id = $request->place_id;
        $book->save();
        return redirect('/books');
    }
    public function edit($id)
    {
        $book = Book::find($id);
        $place = Place::find($book->place_id);
        $places = Place::all();
        return view('editbook',['book'=>$book,'place'=>$place,'places'=>$places]);
    }
    public function update($id,Request $request)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();
        return redirect('/books/'.$book->id);
    }
    public function export_pdf()
  {
    // Fetch all customers from database
    $books = Book::get();
    // Send data to the view using loadView function of PDF facade
    
    $pdf = \PDF::loadView('bookspdf', compact('books'));
    // If you want to store the generated pdf to the server then you can use the store function
    
    // Finally, you can download the file using download function
    return $pdf->download('book.pdf');
  }
}



