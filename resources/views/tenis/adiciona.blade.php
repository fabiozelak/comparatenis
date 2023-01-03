@extends('layouts.main')

@section('title','Adicionar Tenis')

@section('content')
<!-- COLOCAR LUGAR PARA O UPLOAD DE 4 IMAGENS -->
<div class="conteudo bg-light col-10 mx-auto py-3 rounded-bottom shadow">
    <div id="adicionar_tenis_container" class="offset-1 col-10">
        <h1 style="text-align: center; padding: 30px 0;">Adicione o tênis</h1>

        <form action="/comparar" method="post" class="pb-3" enctype="multipart/form-data">
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
                    <div class="row rounded border bg-white mx-1 col-10">
                        <div class="col-5 pt-4">
                            <p>Aderência</p>
                        </div>

                        <div class="col-5">
                            <div class="form-check">
                                <input type="radio" name="aderencia" id="aderencia" class="form-check-input" value="Baixa">
                                <label for="aderencia" class="form-check-label">Baixa</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="aderencia" id="aderencia" class="form-check-input" value="Boa">
                                <label for="aderencia" class="form-check-label">Boa</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="aderencia" id="aderencia" class="form-check-input" value="Ótima">
                                <label for="aderencia" class="form-check-label">Ótima</label>
                            </div>
                        </div>
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
                    <div class="row rounded border bg-white mx-1 col-10">
                        <div class="col-5 pt-4">
                            <p>Respirabilidade</p>
                        </div>
                        <div class="col-5">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="respirabilidade" name="respirabilidade" value="Baixa">
                                <label class="form-check-label" for="respirabilidade">Baixa</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="respirabilidade" name="respirabilidade" value="Boa">
                                <label class="form-check-label" for="respirabilidade">Boa</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="respirabilidade" name="respirabilidade" value="Ótima">
                                <label class="form-check-label" for="respirabilidade">Ótima</label>
                            </div>
                        </div>

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
                <div class="form-floating mb-3 mt-3">
                    <input type="file" class="form-control-file" id="imagem1" name="imagem1">
                    <label for="imagem1">Imagem 1 (Principal)</label>
                </div>
        </form>
    </div>




</div>
</div>
@endsection

@section('scripts')
@endsection