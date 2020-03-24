@extends('layouts.app')

@section('content')
    <h1>Alta de Editorial</h1>
    <form action="/editorials" method="post">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" value="{{ old('name') }}">
    {{$errors->first('name')}}
    <br>
    <br>
    
  
   
    <input type="submit" value="Nuevo">
    </form>
@endsection
