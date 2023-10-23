@extends('layouts.app')

@section('content')

<h1 style="color:#243A73;" id="titulo">Doação de Alimentos</h1>

<style>
body{
 background-color:#A5BECC !important; 
}

  .search-bar {
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 400px;
    padding: 8px;
    background-color: #f5f5f5;
    border-radius: 30px;
  }
  h1 {
            text-align: center;
        }

  .search-bar input[type="text"] {
    flex-grow: 1;
    border: none;
    background-color: transparent;
    margin-left: 8px; 
    outline: none;
    font-size: 16px;
    color: #333;
  }
  
  .search-bar button {
    background-color: #243A73;
    color: white;
    border: none;
    padding: 8px 16px;
    cursor: pointer;
    border-radius: 30px;
    font-size: 16px;
  }
  
  #barra {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }

  .quadrado {
    background-color: #243A73;
    border-radius: 10px;
    width: 150px;
    height: 150px;
    border: 1px solid black;
    margin-right: 10px;
  }

  .container {
    display: grid;
    justify-content: center;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    grid-gap: 10px;
    margin-top: 20px;
  }

  .botao {
    background-color: #243A73;
    border-radius: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 90px;
    height: 90px;
    border: 1px solid black;
    margin-right: 10px;
  }

  .imagem {
    width: 60px;
    height: 60px;
  }
  .meu-link:hover {
  color: #dbc58c; 
}   
.meu-link {
  color: #dbc58c; 
}  
a {
      text-decoration: none;
    }

  @media (max-width: 768px) {
    /* Estilos aplicados quando a tela tem no máximo 768px de largura (celular) */
    .container {
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    }

    .quadrado {
      width: 140px;
      height: 140px;
     
    }
    

    .botao {
      width: 70px;
      height: 70px;
    }

  }
  .cor{
    display: flex;
            flex-direction: column;
           
            background-color: #A5BECC;
           
  }
</style>

<body>
<div class="cor">
<div id="barra">
    <div class="search-bar">
      <input type="text" placeholder="Pesquisar">
      <button type="submit">Buscar</button>
    </div>
  </div>

  <br><br><br><br><br><br>

  <?php
  use App\Models\User; // Importe o modelo de usuário adequado
  ?>

<div class="container">
 

<?php for ($i = 0; $i < 5; $i++): ?>
    <?php
    // Recuperar um usuário aleatório com a descrição da doação
    $usuarioAleatorio = User::inRandomOrder()
        ->select('name', 'descricao')
        ->first();

        // <a href="home?nome=<?php echo urlencode($usuarioAleatorio->name): 
        // >&descricao=<?php echo urlencode($usuarioAleatorio->descricao); >" class="meu-link">

    ?>
   <a href="contato2?nome=<?php echo urlencode($usuarioAleatorio->name); ?>&descricao=<?php echo urlencode($usuarioAleatorio->descricao); ?>" class="meu-link">
        <div class="quadrado">
        <h8>Nome: <?php echo $usuarioAleatorio->name; ?></h8> <br>
        <h8>Descrição da Entidade: <?php echo $usuarioAleatorio->descricao; ?></h8>
        </div>
    </a>
<?php endfor; ?>

<?php for ($i = 0; $i < 9; $i++): ?>
    <?php
    // Recuperar um usuário aleatório com a descrição da doação
    $usuarioAleatorio = User::inRandomOrder()
        ->select('name', 'descricao')
        ->first();
    ?>
    <a href="contato2?nome=<?php echo urlencode($usuarioAleatorio->name); ?>&descricao=<?php echo urlencode($usuarioAleatorio->descricao); ?>" class="meu-link">
        <div class="quadrado">
        <h8>Nome: <?php echo $usuarioAleatorio->name; ?></h8> <br>
        <h8>Descrição da Entidade: <?php echo $usuarioAleatorio->descricao; ?></h8>
        </div>
    </a>
<?php endfor; ?>

</div> 
</div>

  

</body>
@endsection