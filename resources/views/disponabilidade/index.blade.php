<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
                    <div class="row">
                  <div class="col-md-4">
                    <h2>Disponabilidades Cadastradas</h2>
                    <ul class="list-group justify-content-end">
                 @foreach($disponabilidades as $disponabilidade)
                     <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>{{ $disponabilidade->nome }}</span>
                    <div>
                    <a href="{{ route('disponabilidade.edit', $disponabilidade->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="{{ route('disponabilidade.delete', $disponabilidade->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                     </div>
                     </li>
                  @endforeach
                    </ul>
                </div>

      <div class="d-flex justify-content-between mb-3">
                        <a href="{{ route('disponabilidade.create') }}" class="btn btn-danger">Cadastrar Disponabilidade</a>
                       
                    </div>
</body>
</html>