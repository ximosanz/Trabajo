<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Place</title>
</head>
<body>
    <h1>Alta de Place</h1>
    <form action="/books" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name">
    
    <input type="submit" value="Nuevo">
    </form>
</body>
</html>