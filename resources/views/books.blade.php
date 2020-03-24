@extends('layouts.app')

@section('content')
    <h1>Lista de libros</h1>
    <br>
    <br>
    
    <h2>Books</h2>
    <a href="/books/pdf">Export PDF</a>
    @if (Session::get('lastbook'))
    <h3>El ultimo libro es: {{Session::get('lastbook')->title}}</h3>
    <a href="/books/forget">Olvidar el ultimo libro</a>
    @else
    <h3>Ninguno</h3>
    @endif
    <h4> <a href="/books/create">Nuevo</a> </h4>
    <br>
    Los ultimos libros vistados son estos
   

    @if( Session::get('books') )
        @foreach( Session::get('books') as $book)
    <h4>{{$book->title}}</h4>
    @endforeach
    @else
    <h1>Esta vacio</h1>
    @endif
    <ul>
    
    @forelse($books as $book)

    <li>
        Titulo:
        {{ $book ->title }}
        <br>
         Autor :      {{ $book ->author }}
         <br> 
        Place :      {{ $book ->place->name }} 
        <br> 
        Editorial :      {{ $book ->editorial->name }}
        <br> 
        Cdu :      {{ $book ->CDU->description }} 
        
        @can('view',$book)
        <a href="/books/{{ $book->id }}" class="btn btn-primary">Ver</a>
        @endcan
        <a href="/books/{{ $book->id }}/edit" class="btn btn-primary">Editar</a>
      

        <form action="/books/{{ $book->id }}" method="POST" >
        @csrf
            <input type="hidden" name="_method" value="delete">
            @can('delete',$book)
            <input type="submit" value="Borrar">
            @endcan
        </form>
    </li>

    @empty
        No hay libros
        @endforelse
      
</ul>
    {{ $books-> render() }}
    @endsection