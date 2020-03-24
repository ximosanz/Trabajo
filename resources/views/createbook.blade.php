<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book</title>
</head>
<body>
    <h1>Alta de libro</h1>
    <form action="/books" method="post">
    @csrf
    <label for="title">Titulo</label>
    <input type="text" name="title" value="{{ old('title') }}">
    {{$errors->first('title')}}
    <br>
    <br>
    <label for="title">Autor</label>
    <input type="text" name="author" value="{{ old('author') }}">
    <br>
    <br>
    <select class="form-control" name="place_id" >
    <option></option>
    @foreach  ($places as $place)
       
         
        <option value="{{ $place->id }}" {{ $place->id == old('place_id') ? 'selected="selected"':''}}>{{ $place->name }}</option>
       
    @endforeach
    </select>
    {{$errors->first('place_id')}}
    <input type="submit" value="Nuevo">
    </form>
</body>
</html>
