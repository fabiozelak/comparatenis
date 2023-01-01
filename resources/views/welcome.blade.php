    @extends('layouts.main')

    @section('title','Compara Tenis')

    @section('content')
    <!-- CONTEUDO  -->
    <div class="conteudo bg-light col-10 mx-auto py-3 rounded-bottom shadow">
        <div class="col-11 bg-danger mx-auto mb-3 text-white ">
            <p class="text-center">BANNER DE PROPAGANDA</p>
            <p class="text-center">BANNER DE PROPAGANDA</p>
        </div>
        <!---CODIGO EXEMPLO CARD -->
        <form action="/comparar" method="GET" id="form_compara">
            <div class="row">
                <div class="card mx-auto text-bg-light col-sm-12 col-md-5 col-lg-3 mb-3 border-dark" style="height:300px;">
                    <img src="semshoes.png" class="card-img my-auto" alt="...">
                    <div class="card-img-overlay">
                        <!-- Select2-->
                        <select class="form-control m-3" id="select_tenis1" name="select_tenis1" form="form_compara">
                            <option value=""></option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                </div>
                <div class="card mx-auto text-bg-light col-sm-12 col-md-5 col-lg-3 mb-3 border-dark" style="height:300px;">
                    <img src="semshoes.png" class="card-img my-auto" alt="...">
                    <div class="card-img-overlay">
                        <!-- Select2-->
                        <select class="form-control m-3" id="select_tenis2" name="select_tenis2" form="form_compara">
                            <option value=""></option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                </div>
                <div class="card mx-auto text-bg-light col-sm-12 col-md-5 col-lg-3 mb-3 border-dark" style="height:300px;">
                    <img src="semshoes.png" class="card-img my-auto" alt="...">
                    <div class="card-img-overlay clearfix">
                        <div class="d-flex align-items-center">
                            <!-- Select2-->
                            <select class="form-control " id="select_tenis3" name="select_tenis3" form="form_compara">
                                <option value=""></option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-11 mx-auto mb-3 ">
                <div class="row">
                    <div class="col-11"></div>
                    <div class="col-1">
                        <button type="submit" class="btn btn-primary">Comparar</button>
                    </div>
                </div>
            </div>
        </form>


        <!-- DIv da Direita arquivos-->
        <div class="row align-items-md-stretch mx-3 mb-2">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-light border rounded-3">

                    @foreach( $tenis as $tenis_coletado) <div class="row">
                        <div class="col-2"><i class="bi bi-1-square-fill"></i></div>
                        <div class="col-2">Img</div>
                        <div class="col-6">
                            {{ $tenis_coletado->marca }} {{$tenis_coletado->modelo}}
                        </div>
                </div>
                @endforeach
                <!-- <div class="row">
                        <div class="col-2"><i class="bi bi-1-square-fill"></i></div>
                        <div class="col-2">Img</div>
                        <div class="col-6">
                            {{ $nome[0] }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2"><i class="bi bi-2-square-fill"></i></div>
                        <div class="col-2">Img</div>
                        <div class="col-6">{{ $nome[1] }}</div>
                    </div>
                    <div class="row">
                        <div class="col-2"><i class="bi bi-3-square-fill"></i></div>
                        <div class="col-2">Img</div>
                        <div class="col-6">{{ $nome[2] }}</div>
                    </div>
                    <div class="row">
                        <div class="col-2"><i class="bi bi-4-square-fill"></i></div>
                        <div class="col-2">Img</div>
                        <div class="col-6">Nome4</div>
                    </div>
                    <div class="row">
                        <div class="col-2"><i class="bi bi-5-square-fill"></i></div>
                        <div class="col-2">Img</div>
                        <div class="col-6">Nome5</div>
                    </div>
                    <div class="row">
                        <div class="col-2"><i class="bi bi-6-square-fill"></i></div>
                        <div class="col-2">Img</div>
                        <div class="col-6">Nome6</div>
                    </div>
                    <div class="row">
                        <div class="col-2"><i class="bi bi-7-square-fill"></i></div>
                        <div class="col-2">Img</div>
                        <div class="col-6">Nome7</div>
                    </div>
                    <div class="row">
                        <div class="col-2"><i class="bi bi-8-square-fill"></i></div>
                        <div class="col-2">Img</div>
                        <div class="col-6">Nome8</div>
                    </div>
                    <div class="row">
                        <div class="col-2"><i class="bi bi-9-square-fill"></i></div>
                        <div class="col-2">Img</div>
                        <div class="col-6">Nome9</div>
                    </div>
                    <div class="row">
                        <div class="col-2"><i class="bi bi-1-square-fill"></i><i class="bi bi-0-square-fill"></i></div>
                        <div class="col-2">Img</div>
                        <div class="col-6">Nome10</div>
                    </div> -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>ION ICOns</h2>
                <p>Or, keep it light and add a border for some added definition to the boundaries of your content.
                    Be sure to look under the hood at the source HTML here as we've adjusted the alignment and
                    sizing of both column's content for equal-height.</p>
                <button class="btn btn-outline-secondary" type="button">Example button</button>
            </div>
        </div>
    </div>

    </div>
@endsection
@section('scripts')
    <!-- Scripts-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
        $(Document).ready(function() {
            $("#select_tenis1").select2();
            $("#select_tenis2").select2();
            $("#select_tenis3").select2();
            $('#select_tenis1').select2({
                placeholder: 'Escolha um modelo',
                allowClear: true,
                minimumInputLength: 1,
            });
            $('#select_tenis2').select2({
                placeholder: 'Escolha um modelo',
                allowClear: true,
                minimumInputLength: 1,
            });
            $('#select_tenis3').select2({
                placeholder: 'Escolha um modelo',
                allowClear: true,
                minimumInputLength: 1,
            });
        });
    </script>
    @endsection