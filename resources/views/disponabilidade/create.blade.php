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
                        
                 <div id="app" >
        
        <main class="py-4">
                    <div class="container">
            <h1>Cadastrar disponibilidade</h1>
            <form method="POST" action="http://127.0.0.1:8000/disponabilidade/store">
                @csrf
                <select class="form-control" name="item">
                    @foreach ($items as $item)
                        <option value="{{$item->iditem}}">{{$item->nome}}</option>
                @endforeach
                </select>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                </div>
                <div class="form-group">
                    <label for="validade">Validade</label>
                    <input type="date" class="form-control" id="validade" name="validade" required>
                </div>
                <button type="submit" class="btn btn-danger">Cadastrar</button>
            </form>
        </div>
                        </main>
    </div>
                                                    
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