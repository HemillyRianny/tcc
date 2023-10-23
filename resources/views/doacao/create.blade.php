<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Doação de Alimentos</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>Cadastrar Doador</h1>
            <form method="POST" action="{{ route('doador.store') }}">
                @csrf
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="form-group">
                    <label for="atuacao">Atuação</label>
                    <input type="text" class="form-control" id="atuacao" name="atuacao">
                </div>
                
                <button type="submit" class="btn btn-danger">Cadastrar</button>
            </form>
        </div>
    @endsection

</body>

</html>
