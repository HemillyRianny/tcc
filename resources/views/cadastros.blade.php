<!doctype html>
<html lang="en">
  @extends('layouts.app')
  @section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Doação de Alimentos</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/templatemo-pod-talk.css') }}" rel="stylesheet">
<style>
 

</style>
</head>
<body>
        <main>
            <section class="hero-section">
                <div class="container">
                    <div class="row">
                        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light mx-auto rounded" style="width: 280px; border: 1px solid #000; padding: 20px;">

                            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                                <svg class="bi me-2" width="40" height="32">
                                    <use xlink:href="#bootstrap"></use>
                                </svg>
                                <span class="fs-4">Cadastro</span>
                            </a>
                            <hr>
                                
                                                    <ul class="nav nav-pills flex-column mb-auto">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('receptor.create') }}">
                                                                Quero ser Receptor
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('doador.create') }}">
                                                                Quero ser Doador
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('disponabilidade.create') }}">
                                                                Fazer Doação
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('necessidade.create') }}">
                                                                Receber Doação
                                                            </a>
                                                        </li>
                                                        @if (Auth::check() && Auth::user()->email == 'hemilly@gmail.com')
                                                            <hr>
                                                            <span class="fs-4">Área de administração</span>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{ route('item.create') }}">
                                                                    Cadastrar Item
                                                                </a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                    <hr>
                           
                        
                        </div>
                        
                       </div>
    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

</body>
@endsection
</html>