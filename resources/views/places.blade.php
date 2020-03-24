@extends('layouts.app')

@section('content')
    <h1>Lista de Places</h1>
    <br>
    <br>
    
    <h3>Places</h3>
  
    <h1> <a href="/places/create">Nuevo</a> </h1>
    
    <ul>
    
    @forelse($places as $place)

    <li>
        {{ $place ->name }}
        @foreach($place->books as $book)
        Libros: {{ $book->title }}
        Nº de libros: {{ count($place->books) }}
        
        @endforeach

        <a href="/places/{{ $place->id }}">Ver</a>
        <a href="/places/{{ $place->id }}/edit">Editar</a>
      

        <form action="/places/{{ $place->id }}" method="POST" >
        @csrf
            <input type="hidden" name="_method" value="delete">
            @if(count($place->books))
            <input type="submit" value="Borrar">
            @endif

        </form>
    </li>

    @empty
        No hay Places
        @endforelse
      
</ul>
    {{ $places-> render() }}
@endsection