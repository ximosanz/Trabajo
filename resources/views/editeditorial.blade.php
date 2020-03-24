@extends('layouts.app')

@section('content')
    <h1>Edicion de Editorials</h1>
    <form action="/editorials/{{ $editorial->id }}" method="post">
    @csrf
    <label for="name">Nombre</label><input type="text" name="name" value="{{ $editorial->name }}">
            <br>
            <br>
           
            <input type="hidden" name="_method" value="put">
            <input type="submit" value="Editar">
    </form>
    @endsection