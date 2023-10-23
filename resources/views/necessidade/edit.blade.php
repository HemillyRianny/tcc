<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentro ou Fora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h2>Editar Necessidade</h2>
            <form method="POST" action="{{ route('necessidade.update', $necessidade->id) }}">
                @csrf

                <div class="form-group">
                    <label for="nome">Nome da Necessidade</label>
                    <input type="text" class="form-control" id="nome" name="nome"
                        value="{{ old('nome', $necessidade->nome) }}" required>
                </div>
                <button type="submit" class="btn btn-danger">Salvar</button>
            </form>
        </div>
    @endsection

</body>

</html>
