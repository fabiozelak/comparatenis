<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComparaController extends Controller
{
    public function index(){
        $nome = ["Nike Pegasus 39","Adizero Adios Pro 2.0","Fresh Foam 1080 V11"];
        $num_novos = 9;
        return view('welcome',
        [
            'nome' => $nome,
            'num_novos' => $num_novos
        ]);

    }

    public  function    adiciona(){
        return view('tenis.adiciona');
    }

    public  function    edita(){
        return view('tenis.edita');
    }
}
