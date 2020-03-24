@extends('layouts.app')

@section('content')
    <h1>Detalles del Editorial: {{ $editorial ->id }}</h1>
    <br>
    <br>
    
    <h3>Editorial</h3>
  

   
    
    
       
       Nombre:  {{ $editorial ->name }}         


   

  
      
</ul>
   
@endsection