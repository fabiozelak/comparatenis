<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tenis;

class ComparaController extends Controller
{
    public function index(){
        $tenis = tenis::all();
        $nome = ["Nike Pegasus 39","Adizero Adios Pro 2.0","Fresh Foam 1080 V11"];
        $num_novos = 9;
        return view('welcome',
        [
            'nome' => $nome,
            'num_novos' => $num_novos,
            'tenis' => $tenis,
            'j' => 1
        ]);

    }

    public  function    adiciona(){
        return view('tenis.adiciona');
    }

    public  function    edita(){
        return view('tenis.edita');
    }

    public function comparar(){
        $tenis = tenis::all();
        return view('compara',[
            'tenis' => $tenis
        ]);
    }
     public function gravar_tenis(Request $request){
        $tenis = new tenis;

        $tenis->marca = $request->marca;
        $tenis->modelo = $request->modelo;
        $tenis->indicacao = $request->indicacao;
        $tenis->peso = $request->peso;
        $tenis->sola = $request->sola;
        $tenis->aderencia = $request->aderencia;
        $tenis->entressola = $request->entressola;
        $tenis->drop = $request->drop;
        $tenis->amortecimento = $request->amortecimento;
        $tenis->estabilidade = $request->estabilidade;
        $tenis->cabedal = $request->cabedal;
        $tenis->respirabilidade = $request->respirabilidade;
        $tenis->lingua = $request->lingua;
        $tenis->cadarco = $request->cadarco;
        $tenis->preco = $request->preco;
        
        $tenis->save();

        return redirect('/');

     }
}
