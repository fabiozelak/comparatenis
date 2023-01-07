@extends('layouts.main')
@section('title',"Compara Tenis")
@section('content')
<div class="conteudo bg-light col-10 mx-auto py-3 mt-3rounded-bottom shadow">
    <!-- <h5>Primeiro tenis escolhido é: {{ $tenis_escolhidos[0] }}</h5>
    <h5>Segundo tênis escolhido é: {{ $tenis_escolhidos[1] }}</h5>
    <h5>Terceiro tênis escolhido é: {{ $tenis_escolhidos[2] }}</h5> -->
    <div class="container mt-3">
  <h2>Comparador de Tênis</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Característica</th>
        @for($i = 0; $i < 3; $i++)
        <th>{{$tenis_escolhidos[$i]->modelo}}</th>
        @endfor
      </tr>
    </thead>
    <tbody>
    <tr>
        <th></th>
       @for($i = 0; $i < 3; $i++)
        <td><img style="width: 60px;" src="/img/tenis/{{$tenis_escolhidos[$i]->imagem_thumb}}" alt="{{$tenis_escolhidos[$i]->modelo}}" srcset=""></td>
        @endfor
      </tr>
      <th>Ano de Lançamento</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->lancamento}}</td>
        @endfor
      </tr>
      <tr>
        <th>Indicação</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->indicacao}}</td>
        @endfor
      </tr>
      <tr>
      <th>Peso</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->peso}}g</td>
        @endfor
      </tr>
      <tr>
      <th>Sola</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->peso}}g</td>
        @endfor
      </tr>
      <th>Aderência</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->aderencia}}
        </td>
        @endfor
      </tr>
      <th>Entressola</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->entressola}}</td>
        @endfor
      </tr>
      <th>Drop</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->drop}}</td>
        @endfor
      </tr>
      <th>Amortecimento</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->amortecimento}}</td>
        @endfor
      </tr>
      <th>Estabilidade</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->estabilidade}}</td>
        @endfor
      </tr>
      <th>Cabedal</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->cabedal}}</td>
        @endfor
      </tr>
      <th>Respirabilidade</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->respirabilidade}}</td>
        @endfor
      </tr>
      <th>Língua</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->lingua}}</td>
        @endfor
      </tr>
      <th>Cadarço</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->cadarco}}</td>
        @endfor
      </tr>
      <th>Preço de Lançamento</th>
       @for($i = 0; $i < 3; $i++)
        <td>{{$tenis_escolhidos[$i]->preco}}</td>
        @endfor
      </tr>
    </tbody>
  </table>
</div>
</div>
@endsection