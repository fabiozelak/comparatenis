@extends('layouts.main')
@section('title',"Compara Tenis")
@section('content')
<div class="conteudo bg-light col-10 mx-auto py-3 rounded-bottom shadow">
    <h1>Primeiro tenis escolhido é: {{ $_GET['select_tenis1'] }}</h1>
    <h1>Segundo tênis escolhido é: {{ $_GET['select_tenis2'] }}</h1>
    <h1>Terceiro tênis escolhido é: {{ $_GET['select_tenis3'] }}</h1>
</div>
@endsection