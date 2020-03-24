
<h1>Customer List</h1>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Titulo</th>
      <th>Autor</th>

    </tr>
  </thead>
  <tbody>
    @foreach($books as $book)
      <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
