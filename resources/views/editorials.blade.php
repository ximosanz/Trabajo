@extends('layouts.app')

@section('content')
    <h1>Lista de libros</h1>
    <br>
    <br>
    
    <h3>Editorials</h3>
  
    <h1> <a href="/editorials/create">Nueva</a> </h1>
    
    <ul>
    
    @forelse($editorials as $editorial)

    <li>
       Nombre: {{ $editorial ->name }} 

        <a href="/editorials/{{ $editorial->id }}">Ver</a>
        <a href="/editorials/{{ $editorial->id }}/edit">Editar</a>
      

        <form action="/editorials/{{ $editorial->id }}" method="POST" >
        @csrf
            <input type="hidden" name="_method" value="delete">
            <input type="submit" value="Borrar">
        </form>
    </li>

    @empty
        No hay Editoriales
        @endforelse
      
</ul>
    {{ $editorials-> render() }}
    @endsection