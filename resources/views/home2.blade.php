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

    <!--

TemplateMo 584 Pod Talk

https://templatemo.com/tm-584-pod-talk

-->
<style>
    #search-results p {
        color: rgb(0, 0, 0); /* Mude para a cor que você deseja */
    }
    @keyframes slideUp {
  0% {
    transform: translateY(100%);
  }
  100% {
    transform: translateY(0);
  }
}

.owl-carousel {
  animation: slideUp 2s ease-out;
}
<style>
    .hero-section {
        background-color: #f4f4f4;
        padding: 20px 0;
    }
    .caixaLogin {
        max-width: 500px;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }
    .login-form {
        margin-top: 20px;
    }
    .login-form h2 {
        color: #243A73;
        text-align: center;
    }
    .login-form .form-group {
        margin-bottom: 20px;
    }
    .login-form .form-control {
        border-radius: 0;
    }
    .login-form button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #243A73;
        color: #fff;
        border-radius: 0;
    }
    .login-form .form-control, .login-form button[type="submit"] {
        border-radius: 15px; /* Ajuste este valor para alterar o quão arredondadas as bordas são */
    }
    .login-form a {
        display: block;
        text-align: center;
    }
    .progress-bar{
      background-color: #243A73;
    }
</style>



</head>

<body>

    <main>

      


        <section class="hero-section">
            <div class="container">
                <div class="row">
                
                    <div class="container py-5">
                   
            
                      <h3>Contato:</h3>
                  <div class="col-lg-11" >
                    <div class="card mb-5">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-3">
                          <h6 class="mb-0">Nome:</h6>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">
                              
            
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Email:</h6>
                          </div>
                          <div class="col-sm-8">
                <p class="text-muted mb-0">
                    
                </p>
            </div>
                        </div>
                       
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Telefone:</h6>
                          </div>
                          <div class="col-sm-10">
                <p class="text-muted mb-0">
                    
                </p>
            </div>
                        </div>
                       
                        <hr>
                       
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Endereço:</h6>
                          </div>
                          <div class="col-sm-11">
                <p class="text-muted mb-0">
                   
                </p>
            </div>
                        </div>
                        
                      
                       
                    </div>
                    
                    </div>
                    
                   
                    <h3>Doações:</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                          <div class="card-body">
                            <h6 class="mb-4"> Necessidades: </h6>
                            @foreach ($necessidades as $necessidade)
                            <div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Necessidade: {{ $necessidade->items_iditem }}, Receptor: {{ $necessidade->name }}</p>
                                <div style="display: flex; align-items: center;">
                                    <div class="progress rounded" style="height: 5px; width: 100%;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                     
                                </div>
                            </div>
                            @endforeach
                           
                           
                            
                           
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                          <div class="card-body">
                            
                              <h6 class="mb-4"> Disponabilidades: </h6>
                              @foreach ($disponabilidades as $disponabilidade)
                              <div>
                                  <p class="mt-4 mb-1" style="font-size: .77rem;">Disponibilidade: {{ $disponabilidade->items_iditem }}, Doador: {{ $disponabilidade->name }}</p>
                                  <div style="display: flex; align-items: center;">
                                      <div class="progress rounded" style="height: 5px; width: 100%;">
                                          <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                              aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      </p>
                                  </div>
                              </div>
                              @endforeach
                    
                              @foreach ($users as $user)
                              <div>
                                  <p>Usuário: {{ $user->name }} </p>
                                 
                                  
                              </div>
                          @endforeach
                       
                              
                           
                           
                            
                           
                            
                          </div>
                        </div>
                      </div>
                    
                      
                      <div class="card mb-4 mb-lg-0" style="margin-top: 20px">
                        <div class="card-body p-0">
                          <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fas fa-globe fa-lg text-warning"></i>
                              <p class="mb-0">https://mdbootstrap.com</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                              <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                              <p class="mb-0">@mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                              <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                              <p class="mb-0">mdbootstrap</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                  
                    </div>
                  </div>
                  
                </div>
                
            
                <!-- Inclua o script JS do Bootstrap no final do corpo -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
                <script>
                  window.onload = function() {
                // Recupere as informações do usuário do armazenamento local
                var username = localStorage.getItem('username');
                var email = localStorage.getItem('email');
                var telefone = localStorage.getItem('telefone');
                var endereco = localStorage.getItem('endereco');
                var itens = JSON.parse(localStorage.getItem('itens'));
            
                // Selecione os elementos de parágrafo correspondentes
                var pUsername = document.querySelector('.col-sm-9 p');
                var pEmail = document.querySelector('.col-sm-8 p');
                var pPhone = document.querySelector('.col-sm-10 p');
                var pAddress = document.querySelector('.col-sm-11 p');
            
                // Defina o texto dos elementos de parágrafo para as informações do usuário
                pUsername.textContent = username;
                pEmail.textContent = email;
                pPhone.textContent = telefone;
                pAddress.textContent = endereco;
            
                // Exiba os itens do usuário na página
                var itemList = document.querySelector('.item-list');
                itens.forEach(item => {
                    var pItem = document.createElement('p');
                    pItem.textContent = item.nome + ': ' + item.quantidade;
                    itemList.appendChild(pItem);
                });
            };
            
              </script>
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