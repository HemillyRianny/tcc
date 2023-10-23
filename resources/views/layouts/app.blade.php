<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Doação de Alimentos') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
      #cor{
        background-color: #348CD2!important;
      }

      #search-results {
    position: absolute;
    width: 767px;
    max-height: 200px;
    overflow-y: auto;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 4px;
    z-index: 99;
}
#search-results p {
    padding: 10px;
    cursor: pointer;
}
#search-results p:hover {
    background-color: #f1f1f1;
}

    </style>
</head>
<body >

    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="cor">
            <div class="container">
                @if (\Request::is('/')) 
    <a class="navbar-brand me-lg-5 me-0" href="/">
        <img src="imagens/doacaoA.png" class="logo-image img-fluid" alt="templatemo pod talk">
    </a>
@else
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Doação de Alimentos') }}
    </a>
@endif

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                        @if (\Request::is('/')) 
                        <form action="/search" method="get" class="custom-form search-form flex-fill me-3" role="search">
                            <div class="input-group input-group-lg">
                                <input name="search" type="search" class="form-control" id="search-input" placeholder="Pesquisar" aria-label="Search">
                                <button type="submit" class="form-control" id="submit">
                                    <i class="bi-search"></i>
                                </button>
                            </div>
                            <div id="search-results"></div>
                        </form>
                    @endif
                    
                        <script>
        document.getElementById('search-input').addEventListener('input', function(e) {
        var resultsContainer = document.getElementById('search-results');
        resultsContainer.innerHTML = '';
        if (e.target.value.trim() === '') {
            resultsContainer.style.display = 'none';
            return;
        }
        fetch('/search?search=' + e.target.value)
            .then(response => response.json())
            .then(data => {
                if (data.disponabilidades.length > 0 || data.necessidades.length > 0 || data.users.length > 0) {
                    resultsContainer.style.display = 'block';
                } else {
                    resultsContainer.style.display = 'none';
                }
                data.disponabilidades.forEach(disponabilidade => {
                    const p = document.createElement('p');
                    p.textContent = 'Disponibilidade: ' + disponabilidade.items_iditem + ', Doador: ' + disponabilidade.name;
                    
                    resultsContainer.appendChild(p);
                });
                data.necessidades.forEach(necessidade => {
                    const p = document.createElement('p');
                    p.textContent = 'Necessidade: ' + necessidade.items_iditem + ', Receptor: ' + necessidade.name;
                
                    resultsContainer.appendChild(p);
                });
                // Adicione este loop para exibir os usuários encontrados
                data.users.forEach(user => {
                    const p = document.createElement('p');
                    p.textContent = 'Usuário: ' + user.name;
                
                    resultsContainer.appendChild(p);
                });
            });
    });


                        </script>
                        
    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-lg-auto">
                               
                                
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('forms3'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('forms3') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown ms-4">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle btn custom-btn custom-border-btn smoothscroll" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>
                        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

     
        <main class="py-4">
            @yield('content')
            @yield('buscar')
        </main>
    </div>
</body>
</html>
