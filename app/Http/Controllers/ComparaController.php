<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tenis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ComparaController extends Controller
{
    public function index()
    {
        $tenis = tenis::all();
        // $tenis = DB::select('select id,marca,modelo,imagem1 from tenis');
        $nome = ["Nike Pegasus 39", "Adizero Adios Pro 2.0", "Fresh Foam 1080 V11"];
        $num_novos = 9;
        return view(
            'welcome',
            [
                'nome' => $nome,
                'num_novos' => $num_novos,
                'tenis' => $tenis,
                'j' => 1
            ]
        );
    }

    public  function    adiciona()
    {
        return view('tenis.adiciona');
    }

    public  function    edita($id)
    {
        $tenis = tenis::FindOrFail($id);
        return view('tenis.edita', [
            'tenis' => $tenis,
        ]);
    }
    public  function    dashboard_site()
    {
        $tenis = tenis::all();

        return view(
            'dashboard_site',
            [
                'tenis' => $tenis,
            ]
        );
    }
    public function comparar_tenis(Request $comparacao)
    {
        $id1 = $comparacao->select_tenis1;
        $id2 = $comparacao->select_tenis2;
        $id3 = $comparacao->select_tenis3;
        $tenis_1 = tenis::FindOrFail($id1);
        $tenis_2 = tenis::FindOrFail($id2);
        $tenis_3 = tenis::FindOrFail($id3);
        $tenis_escolhidos[0] = $tenis_1;
        $tenis_escolhidos[1] = $tenis_2;
        $tenis_escolhidos[2] = $tenis_3;

        //$tenis = new tenis;

        return view('compara', [
            'tenis_1' => $tenis_1,
            'tenis_2' => $tenis_2,
            'tenis_3' => $tenis_3,
            'tenis_escolhidos' => $tenis_escolhidos
        ]);
    }

    public function gravar_tenis(Request $request)
    {
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
        if ($request->hasFile('imagem1') && $request->file('imagem1')->isValid()) {
            $requestImage = $request->imagem1;
            $extension = $requestImage->extension();
            $nomeImagem = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

            $requestImage->move(public_path('img/tenis'), $nomeImagem);

            $tenis->imagem1 = $nomeImagem;
        }

        if ($request->hasFile('imagem2') && $request->file('imagem2')->isValid()) {
            $requestImage = $request->imagem2;
            $extension = $requestImage->extension();
            $nomeImagem = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

            $requestImage->move(public_path('img/tenis'), $nomeImagem);

            $tenis->imagem2 = $nomeImagem;
        }

        if ($request->hasFile('imagem3') && $request->file('imagem3')->isValid()) {
            $requestImage = $request->imagem3;
            $extension = $requestImage->extension();
            $nomeImagem = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

            $requestImage->move(public_path('img/tenis'), $nomeImagem);

            $tenis->imagem3 = $nomeImagem;
        }

        if ($request->hasFile('imagem_thumb') && $request->file('imagem_thumb')->isValid()) {
            $requestImage = $request->imagem_thumb;
            $extension = $requestImage->extension();
            $nomeImagem = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

            $requestImage->move(public_path('img/tenis'), $nomeImagem);

            $tenis->imagem_thumb = $nomeImagem;
        }

        $tenis->save();

        return redirect('/dashboard_site')->with('msg', 'Tenis adicionado ao banco de dados');
    }

    public function pesquisa()
    {
        $search = request('search');
        $tenis = tenis::where([
            ['modelo', 'like', '%' . $search . '%']
        ])->get();
        return view('pesquisa', [
            'tenis' => $tenis,
            'search' => $search
        ]);
    }

    public function destroy($id)
    {
        $apaga = tenis::findOrFail($id);
        $caminho = 'img/tenis/' . $apaga->imagem1;

        if ($apaga->imagem1) {
            $caminho = public_path('img/tenis/' . $apaga->imagem1);
           unlink($caminho);
        }
        if ($apaga->imagem2) {
            $caminho = public_path('img/tenis/' . $apaga->imagem2);
            unlink($caminho);
        }
        if ($apaga->imagem3) {
            $caminho = public_path('img/tenis/' . $apaga->imagem3);
            unlink($caminho);
        }
        if ($apaga->imagem_thumb) {
            $caminho = public_path('img/tenis/' . $apaga->imagem_thumb);
            unlink($caminho);
        }

        $apaga->delete();
        $tenis = tenis::all();
        return view('dashboard_site', [
            'tenis' => $tenis,
        ])->with('msg', 'Evento Excluído com sucesso!');
    }

















    // $caminho = public_path('img/tenis/' . $apaga->imagem1);
    // $tenis = tenis::all();
    // if($caminho){
    //     unlink($caminho);
    //     //Storage::disk('public')->delete($caminho);
    //     Storage::delete($caminho);
    //     //$apaga->delete();

    // //Falta colocar o drop das imagens

    // return view('dashboard_site', [
    //     'tenis' => $tenis,
    // ])->with('msg', 'Evento Excluído com sucesso!');
    // }else{
    //     return view('debug', [
    //         'tenis' => $tenis,
    //         'search' => $caminho,
    //     ])->with('msg', 'Evento Excluído com ERRO!');
    // }


    // }
}
