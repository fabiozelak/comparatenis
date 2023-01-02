<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--Get your code at fontawesome.com-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  Select2  -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Incones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!-- CSS only -->
    <link rel="stylesheet" href="/css/base.css">
    <title>@yield('title')</title>
</head>

<body>
    <!-- CABECALHO-->
    <div class="cabecalho">
        <div class="col-10 pt-1 mx-auto bg-light rouded-top shadow align-items-end" style="height:80px">
            <a href="/" class=""><img src="/img/logo.png" class="ms-4" height="100%" alt="Logotipo"></a>
        </div>
    </div>
    <!--Menu-->
    <div class="bg-dark shadow">
        <nav class="col-10 mx-auto navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <div class="container-fluid">
                <a href="/"><i class="fa fa-home ps-2" style="font-size:24px;color:white"></i></a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ps-2">
                        <a class="nav-link active" aria-current="page" href="#">Comparar Tênis</a>
                    </li>
                    <li class="nav-item ps-2">
                        <a class="nav-link active" aria-current="page" href="#">Forum</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit"><i class="fa fa-search" style="font-size:24px;color:white"></i></button>
                </form>
            </div>

        </nav>
    </div>
    @yield('content')
    <!-- RODAPE -->
    <div class="container-fluid " id="rodape">
        <div class="col-10 mx-auto">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top border-secundary">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-muted">© 2022 Compara Tênis Ltda.</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="#"><i class="fa fa-twitter-square" style="font-size:24px;color:gray"></i> </a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><i class="fa fa-instagram" style="font-size:24px;color:gray"></i></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><i class="fa fa-facebook-square" style="font-size:24px;color:gray"></i></a></li>
                </ul>
            </footer>
        </div>
       
    </div>
         @yield('scripts')




</body>

</html>