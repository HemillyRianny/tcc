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
          <div class="container">
                        <h1>Cadastrar necessidade de doação</h1>
                        <form method="POST" action="{{ route('item.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Produto Desejado</label>
                                <select name="nome" class="form-control" id="nome">
                                    <option value="Feijão">Feijão</option>
                                    <option value="Arroz">Arroz</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao">
                            </div>
                            <button type="submit" class="btn btn-danger">Cadastrar</button>
                            </form>
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