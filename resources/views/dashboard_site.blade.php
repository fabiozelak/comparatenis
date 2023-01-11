@extends('layouts.main')

@section('title','Compara Tenis')

@section('content')
@guest
<h1>Você não tem permissão para acessar!</h1>
@endguest
@auth
@if(session('msg'))
<div class=" col-10 mx-auto mt-3 alert alert-success alert-dismissible relative fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Successo!</strong> {{session('msg')}}
</div>
@endif
<div class="conteudo bg-light col-10 mx-auto py-3 rounded-bottom shadow">
    <div class="row p-3 ">
        <table class="table table-striped table-light">
            <thead>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Indicacao</th>
                <th>Peso</th>
                <th>Ano</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach ($tenis as $listagem)

                <tr>
                    <td>{{$listagem->id}}</td>
                    <td>{{$listagem->marca}}</td>
                    <td>{{$listagem->modelo}}</td>
                    <td>{{$listagem->indicacao}}</td>
                    <td>{{$listagem->peso}}</td>
                    <td>{{$listagem->ano}}</td>
                    <td><a href="/tenis/edita?edita={{$listagem->id}}" class="btn btn-success">EDITAR</a>
                        <form action="/dashboard_site/{{$listagem->id}}" style="display: inline-block;" method="POSt">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">APAGAR</button>
                        </form>
                </tr>

                @endforeach
            </tbody>
        </table>
        <div class="col-md-5"></div>
        <div class="col-md-2"><a href="/tenis/adiciona" class="btn btn-success" role="button">Adicionar Tênis</a></div>
        <div class="col-md-5"></div>
    </div>
</div>
@endauth
@endsection