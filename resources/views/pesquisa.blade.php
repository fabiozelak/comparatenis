@extends('layouts.main')
@section('title',"Comparando Tênis")
@section('content')
<div class="conteudo bg-light col-10 mx-auto p-3 rounded-bottom shadow">

    @if (!$search)
    <h1>não foi realizado nenhuma busca</h1>
    <a href="/">Voltar para a home</a>

    @elseif (count($tenis) == 0 && $search)
    <h1>não foi encontrado nenhum tênis com o termo: {{$search}}!</h1>

    @else
    <div id="cards_container ms-2 flex" class="row" style="margin: 0;">
        @foreach($tenis as $pesquisa)
        <div class="card col-md-3 flex-1-1-0 mx-1" style="width: 25%;">
            <img src="/img/tenis/{{$pesquisa->imagem1}}" alt="{{$pesquisa->marca}} {{$pesquisa->modelo}}" srcset="" style="height: 100px;">
            <div class="card-body">
                <table class="table table-light">
                    <tbody>
                        <tr>
                            <td>
                                <h6>Marca:</h6>
                            </td>
                            <td>
                                <h6>{{$pesquisa->marca}}</h6>
                            </td>
                        </tr>
                        <tr>
                            <td><h6>Modelo:</h6></td>
                            <td><h6>{{$pesquisa->modelo}}</h6></td>
                        </tr>
                        <tr>
                            <td>Indicação:</td>
                            <td>{{$pesquisa->indicacao}}</td>
                        </tr>
                        <tr>
                            <td>Drop:</td>
                            <td>{{$pesquisa->drop}}</td>
                        </tr>
                        <tr>
                            <td>Amortecimento:</td>
                            <td>{{$pesquisa->amortecimento}}</td>
                        </tr>
                        <tr>
                            <td>Estabilidade:</td>
                            <td>{{$pesquisa->estabilidade}}</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
        <!-- <h1>Sobre o {{$pesquisa->marca}} {{$pesquisa->modelo}}</h1> -->

        @endforeach
    </div>
    <!-- <a href="/">Voltar para a home</a> -->
    @endif

</div>
@endsection