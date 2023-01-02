@extends('layouts.main')

@section('title','Adicionar Tenis')

@section('content')
<div class="conteudo bg-light col-10 mx-auto py-3 rounded-bottom shadow">
    <div id="adicionar_tenis_container" class="offset-md-1">
        <h1 style="text-align: center; padding: 30px 0;">Adicione o tênis</h1>

        <form action="/comparar" method="post">
            @csrf <div class="row">
                <div class="col-6">
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca do Tenis">
                        <label for="Marca">Marca</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo do Tenis">
                        <label for="Modelo">Modelo</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="indicacao" name="indicacao" placeholder="Indicação">
                        <label for="Indicação">Indicação</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso do Tenis">
                        <label for="Peso">Peso em Gramas</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="sola" name="sola" placeholder="Sola" value="">
                        <label for="Sola">Sola</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="aderencia" name="aderencia" placeholder="Aderência">
                        <label for="Aderência">Aderência</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="entressola" name="entressola" placeholder="Entressola">
                        <label for="Entressola">Entressola</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="drop" name="drop" placeholder="Drop">
                        <label for="Drop">Drop em milímetros</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Adicionar Tenis">
                </div>
                <div class="col-6">

                    <div class="form-group col-6">
                        <label for="Amortecimento">Amortecimento</label>
                        <input type="range" class="form-range" id="amortecimento" name="amortecimento" min="1" max="6" value="1">
                        <div class="row">
                            <div class="col-2">1</div>
                            <div class="col-2">2</div>
                            <div class="col-2">3</div>
                            <div class="col-2">4</div>
                            <div class="col-2">5</div>
                            <div class="col-2">6</div>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="Estabilidade">Estabilidade</label>
                        <input type="range" class="form-range" id="estabilidade" name="estabilidade" min="1" max="6" value="1">
                        <div class="row">
                            <div class="col-2">1</div>
                            <div class="col-2">2</div>
                            <div class="col-2">3</div>
                            <div class="col-2">4</div>
                            <div class="col-2">5</div>
                            <div class="col-2">6</div>
                        </div>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="cabedal" name="cabedal" placeholder="Cabedal">
                        <label for="Cabedal">Cabedal</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="respirabilidade" name="respirabilidade" placeholder="Respirabilidade">
                        <label for="Respirabilidade">Respirabilidade</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="lingua" name="lingua" placeholder="Língua">
                        <label for="Língua">Língua</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="cadarco" name="cadarco" placeholder="Cardarço">
                        <label for="Cardarço">Cadarço</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço de Lançamento">
                        <label for="Preço de Lançamento">Preço de lançamento</label>
                    </div>
                </div>
        </form>
    </div>




</div>
</div>
@endsection

@section('scripts')
@endsection