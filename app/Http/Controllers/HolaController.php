<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function holamundo()
    {
    $saludo = '¿Hola que tal va?';
    $sal = [];
    return view('hola',['saludo' => $saludo,
    'sal' => $sal
    ]);
    }
}
