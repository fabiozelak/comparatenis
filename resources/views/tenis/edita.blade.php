@extends('layouts.main')

@section('title','Adicionar Tenis')

@section('content')
@auth
<div class="conteudo bg-light col-10 mx-auto py-3 rounded-bottom shadow">
<h1>Tela de Editar Tenis</h1>
</div>
@endauth
@guest
<div class="conteudo bg-light col-10 mx-auto py-3 rounded-bottom shadow">
<h1>TNão tem autorizacaos</h1>
</div>
@endguest
@endsection