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
            <h2>Editar Receptor</h2>
            <form method="POST" action="{{ route('receptor.update', $receptor->id) }}">
                @csrf

                <div class="form-group">
                    <label for="nome">Nome da receptor</label>
                    <input type="text" class="form-control" id="nome" name="nome"
                        value="{{ old('nome', $receptor->nome) }}" required>
                </div>
                <button type="submit" class="btn btn-danger">Salvar</button>
            </form>
        </div>
    @endsection

</body>

</html>