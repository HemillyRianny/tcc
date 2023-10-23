@extends('layouts.app')

@section('content')

Não estou usando ele


<style>
    
    .btn {
            background-color: transparent;
            border: 2px solid #243A73;
            border-radius: 0.6em;
            color: #243A73;
            height: 60px;
            width: 170px;
            margin: 20px;
            padding: 1.2em 2.8em;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            text-align: center;
        }   
    
    
 .quadrado {
     
      background-color:#243A73;
      border-radius: 10px;
     
    display: inline-block;
    width: 400px; 
    height: 300px; 
    border: 1px solid black; 
    margin-right: 10px; 
    
  }

 
  

  .linha-quadrados {
    display: flex;
    justify-content: center;
    align-items: center;
  }
    
    .nome{
      display: flex;
    justify-content: center;
    align-items: center;
    }
    .botao{
      background-color: #243A73;
    border-radius: 30px;
    display: inline-block;
    width: 90px;
    height: 90px;
    border: 1px solid black;
    margin-right: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    }

</style>

<body>
  
  <?php 
  $nome = isset($_GET['nome']) ? urldecode($_GET['nome']) : "";
  $descricao = isset($_GET['descricao']) ? urldecode($_GET['descricao']) : "";
  
?>

<!-- Exibir as informações do usuário e descrição de doação -->
  <h1 class="nome"><?php echo $nome; ?></h1>

    <div class="linha-quadrados ">
  <div class="quadrado"  >
  <p>Descrição:<?php echo $descricao; ?></p>
    </div>
  </div>
  <div class="btn btn-default">
  <a href="criar" >
   Contato
  </a>
 
</div>





</body>


@endsection


