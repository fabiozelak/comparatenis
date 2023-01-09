@extends('layouts.main')

@section('title','Compara Tenis')

@section('content')
@guest
<h1>Você não tem permissão para acessar!</h1>
@endguest
@auth
<div class="conteudo bg-light col-10 mx-auto py-3 rounded-bottom shadow">
<div class="row p-3 ">
    <div class="col-md-4"><a href="/tenis/adiciona" class="btn btn-success" role="button">Adicionar Tênis</a></div>
    <div class="col-md-4"><a href="/tenis/edita" class="btn btn-success" role="button">Editar Tênis</a></div>
    <div class="col-md-4"><a href="#" class="btn btn-success" role="button">teste</a></div>
</div>
</div>
@endauth
@endsection