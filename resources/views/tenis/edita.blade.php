@extends('layouts.main')

@section('title','Editar Tenis')

@section('content')
@guest
<h5>Você não tem Acesso a esta página</h5>
@endguest
@auth
<div class="conteudo bg-light col-10 mx-auto py-3 rounded-bottom shadow">
    <div id="adicionar_tenis_container" class="offset-1 col-10">
        <h1 style="text-align: center; padding: 30px 0;">Editar tênis {{$tenis->modelo}}</h1>

        <form action="/adicionar" method="post" class="pb-3" enctype="multipart/form-data">
            @csrf <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="marca" name="marca" value="{{$tenis->marca}}">
                        <label for="Marca">Marca</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="modelo" name="modelo" value="{{$tenis->modelo}}">
                        <label for="Modelo">Modelo</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="indicacao" name="indicacao" value="{{$tenis->indicacao}}">
                        <label for="Indicação">Indicação</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="peso" name="peso" value="{{$tenis->peso}}">
                        <label for="Peso">Peso em Gramas</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="sola" name="sola" value="{{$tenis->sola}}">
                        <label for="Sola">Sola</label>
                    </div>
                    <div class="row rounded border bg-white mx-1 col-10">
                        <div class="col-5 pt-4">
                            <p>Aderência</p>
                        </div>
    
                        <div class="col-5">
                            <div class="form-check">
                                @if($tenis->aderencia == 'Baixa')
                                <input type="radio" name="aderencia" id="aderencia" class="form-check-input" value="Baixa" checked>
                                @else
                                <input type="radio" name="aderencia" id="aderencia" class="form-check-input" value="Baixa">
                                @endif
                                <label for="aderencia" class="form-check-label">Baixa</label>
                            </div>
                            <div class="form-check">
                                @if($tenis->aderencia == 'Boa')
                                <input type="radio" name="aderencia" id="aderencia" class="form-check-input" value="Boa" checked>
                                @else
                                <input type="radio" name="aderencia" id="aderencia" class="form-check-input" value="Boa">
                                @endif
                                <label for="aderencia" class="form-check-label">Boa</label>
                            </div>
                            <div class="form-check">
                                @if($tenis->aderencia == 'Ótima')
                                <input type="radio" name="aderencia" id="aderencia" class="form-check-input" value="Ótima" checked>
                                @else
                                <input type="radio" name="aderencia" id="aderencia" class="form-check-input" value="Ótima">
                                @endif
                                <label for="aderencia" class="form-check-label">Ótima</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="entressola" name="entressola" value="Entressola">
                        <label for="Entressola">Entressola</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="drop" name="drop" value="Drop">
                        <label for="Drop">Drop em milímetros</label>
                    </div>
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
                </div>
                <div class="col-md-6">


                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="cabedal" name="cabedal" value="Cabedal">
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

                        <input type="text" class="form-control" id="lingua" name="lingua" value="Língua">
                        <label for="Língua">Língua</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="cadarco" name="cadarco" value="Cardarço">
                        <label for="Cardarço">Cadarço</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">

                        <input type="text" class="form-control" id="preco" name="preco" value="Preço de Lançamento">
                        <label for="Preço de Lançamento">Preço de lançamento</label>
                    </div>
                    <div class="form-group mb-2">
                        <label for="imagem1">Imagem 1 (Principal)</label><br>
                        <input type="file" class="form-control-file" id="imagem1" name="imagem1">

                    </div>
                    <div class="form-group mb-2">
                        <label for="imagem2">Imagem 2</label><br>
                        <input type="file" class="form-control-file" id="imagem2" name="imagem2">

                    </div>
                    <div class="form-group mb-2">
                        <label for="imagem3">Imagem 3</label><br>
                        <input type="file" class="form-control-file" id="imagem3" name="imagem3">

                    </div>
                    <div class="form-group mb-2">
                        <label for="imagem_thumb">Thumbnail</label><br>
                        <input type="file" class="form-control-file" id="imagem_thumb" name="imagem_thumb">

                    </div>
                    <input type="submit" class="btn btn-primary" value="Adicionar Tenis">
                </div>
        </form>
    </div>




</div>
</div>
@endauth
@endsection

@section('scripts')
@endsection