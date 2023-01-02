@extends('layouts.main')

@section('title','Adicionar Tenis')

@section('content')
<div class="conteudo bg-light col-10 mx-auto py-3 rounded-bottom shadow">
<div id="adicionar_tenis_container" class="col-md-6 offset-md-2">
    <h1>Adicione o tênis</h1>
    <form action="/comparar" method="post">
        @csrf
        <div class="form-group">
            <label for="Marca"></label>
            <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca do Tenis">
        </div>
        <div class="form-group">
            <label for=Modelo"></label>
            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo do Tenis">
        </div>
        <div class="form-group">
            <label for="Indicação"></label>
            <input type="text" class="form-control" id="indicacao" name="indicacao" placeholder="Indicação">
        </div>
        <div class="form-group">
            <label for="Peso"></label>g
            <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso do Tenis">
        </div>
        <div class="form-group">
            <label for="Sola"></label>
            <input type="text" class="form-control" id="sola" name="sola" placeholder="Sola">
        </div>
        <div class="form-group">
            <label for=Aderência"></label>
            <input type="text" class="form-control" id="aderencia" name="aderencia" placeholder="Aderência">
        </div>
        <div class="form-group">
            <label for="Entressola"></label>
            <input type="text" class="form-control" id="entressola" name="entressola" placeholder="Entressola">
        </div>
        <div class="form-group">
            <label for="Drop"></label>mm
            <input type="text" class="form-control" id="drop" name="drop" placeholder="Drop">
        </div>
        <div class="form-group">
            <label for="Amortecimento"></label>
            <input type="text" class="form-control" id="amortecimento" name="amortecimento" placeholder="Amortecimento">
        </div>
        <div class="form-group">
            <label for="Estabilidade"></label>
            <input type="text" class="form-control" id="estabilidade" name="estabilidade" placeholder="Estabilidade">
        </div>
        <div class="form-group">
            <label for="Cabedal"></label>
            <input type="text" class="form-control" id="cabedal" name="cabedal" placeholder="Cabedal">
        </div>
        <div class="form-group">
            <label for="Respirabilidade"></label>
            <input type="text" class="form-control" id="respirabilidade" name="respirabilidade" placeholder="Respirabilidade">
        </div>
        <div class="form-group">
            <label for="Língua"></label>
            <input type="text" class="form-control" id="lingua" name="lingua" placeholder="Língua">
        </div>
        <div class="form-group">
            <label for="Cardarço"></label>
            <input type="text" class="form-control" id="cadarco" name="cadarco" placeholder="Cardarço">
        </div>
        <div class="form-group">
            <label for="Preço de Lançamento"></label>
            <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço de Lançamento">
        </div>
        <input type="submit" class="btn bnt-primary" value="Adicionar Tenis">
    </form>
</div>
</div>
@endsection