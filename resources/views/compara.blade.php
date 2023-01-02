@extends('layouts.main')
@section('title',"Compara Tenis")
@section('content')
<div class="conteudo bg-light col-10 mx-auto py-3 rounded-bottom shadow">
    <h5>Primeiro tenis escolhido é: {{ $_GET['select_tenis1'] }}</h5>
    <h5>Segundo tênis escolhido é: {{ $_GET['select_tenis2'] }}</h5>
    <h5>Terceiro tênis escolhido é: {{ $_GET['select_tenis3'] }}</h5>
    <div class="container mt-3">
  <h2>Comparador de Tênis</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Característica</th>
        @foreach($tenis as $tenis_escolhidos)
        <th>{{$tenis_escolhidos->modelo}}</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Indicação</th>
        @foreach($tenis as $tenis_escolhidos)
        <td>{{$tenis_escolhidos->indicacao}}</td>
        @endforeach
      </tr>
      <tr>
      <th>Peso</th>
        @foreach($tenis as $tenis_escolhidos)
        <td>{{$tenis_escolhidos->peso}}g</td>
        @endforeach
      </tr>
      <tr>
      <th>Sola</th>
        @foreach($tenis as $tenis_escolhidos)
        <td>@if($tenis_escolhidos->sola === '')
                x
            @else
            {{$tenis_escolhidos->peso}}g

            @endif
        </td>
        @endforeach
      </tr>
      <th>Aderência</th>
        @foreach($tenis as $tenis_escolhidos)
        <td>@if($tenis_escolhidos->aderencia === '')
                x
            @else
            {{$tenis_escolhidos->aderencia}}

            @endif
        </td>
        @endforeach
      </tr>
    </tbody>
  </table>
</div>
</div>
@endsection