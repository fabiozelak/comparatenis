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

        //upload de imagens
        if($request->hasFile('imagem1') && $request->file('imagem1')->isValid()){
            $requestImage = $request->imagem1;
            $extension = $requestImage->extension();
            $nomeImagem = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

            $requestImage->move(public_path('img/tenis'),$nomeImagem);

            $tenis->imagem1 = $nomeImagem;

        }

        if($request->hasFile('imagem2') && $request->file('imagem2')->isValid()){
            $requestImage = $request->imagem2;
            $extension = $requestImage->extension();
            $nomeImagem = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

            $requestImage->move(public_path('img/tenis'),$nomeImagem);

            $tenis->imagem2 = $nomeImagem;

        }

        if($request->hasFile('imagem3') && $request->file('imagem3')->isValid()){
            $requestImage = $request->imagem3;
            $extension = $requestImage->extension();
            $nomeImagem = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

            $requestImage->move(public_path('img/tenis'),$nomeImagem);

            $tenis->imagem3 = $nomeImagem;

        }

        if($request->hasFile('imagem_thumb') && $request->file('imagem_thumb')->isValid()){
            $requestImage = $request->imagem_thumb;
            $extension = $requestImage->extension();
            $nomeImagem = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

            $requestImage->move(public_path('img/tenis'),$nomeImagem);

            $tenis->imagem_thumb = $nomeImagem;

        }
        
        $tenis->save();

        return redirect('/')->with('msg','Tenis adicionado ao banco de dados');

     }
}
