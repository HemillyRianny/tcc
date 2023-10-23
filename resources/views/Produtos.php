<?php

class produtos {

  function exibeQuadrados(){
    for ($i = 0; $i < 5; $i++){
      
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
<?php
    } //for 
//function  }
}//class

//Produtos prod = new Produtos();
produtos::exibeQuadrados();

?>