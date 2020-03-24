@extends('layouts.app')

@section('content')
    <h1>Detalles del Place: {{ $place ->id }}</h1>
    <br>
    <br>
    
    <h3>Place</h3>
  

   
    
    
       Place:  {{ $place ->name }}
        <br>
       Place:  {{ $place ->id }}         


   

  
      
</ul>
   
@endsection