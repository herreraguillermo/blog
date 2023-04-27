<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function calendario()
{
    return view('calendario');
}

public function carreras()
{
    return view('carreras');
}

public function carrera($carrera)
{
    return view('carrera', ['carrera' => $carrera]);
}


public function saludar($usuario="invitado"){
    return "hola $usuario";
}


}
?>