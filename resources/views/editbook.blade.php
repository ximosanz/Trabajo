<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar libro</title>
</head>
<body>
    <h1>Edicion de libro</h1>
    <form action="/books/{{ $book->id }}" method="post">
    @csrf
    <label for="title">Titulo</label><input type="text" name="title" value="{{ $book->title }}">
            <br>
            <br>
            <label for="Autor">Titulo</label><input type="text" name="author" value="{{ $book->author }}">
            <br>
            <br>
            <select class="form-control" name="place_id" value>
        <option></option>
        @foreach  ($places as $place)
       
         
         <option value="{{ $place->id }}" {{$place->id == $book->place_id ? 'selected="selected"':''}}>
             {{ $place->name }}</option>
       
        @endforeach
        </select>
            <input type="hidden" name="_method" value="put">
            <input type="submit" value="Editar">
    </form>
</body>
</html>