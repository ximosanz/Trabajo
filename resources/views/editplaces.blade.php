@extends('layouts.app')

@section('content')
    <h1>Edicion de Places</h1>
    <form action="/places/{{ $place->id }}" method="post">
    @csrf
    <label for="name">Nombre</label><input type="text" name="name" value="{{ $place->name }}">
            <br>
            <br>
           
            <input type="hidden" name="_method" value="put">
            <input type="submit" value="Editar">
    </form>
    @endsection