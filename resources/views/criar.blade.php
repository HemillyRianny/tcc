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

    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/bootstrap-icons.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link href="/css/templatemo-pod-talk.css" rel="stylesheet">

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

</style>



</head>

<body>

    <main>

        


        <section class="hero-section">
            <div class="container">
                <div class="row">

                 
                    <div class="container py-5">
                   
            
              
                  <div class="col-lg-11" >
                    <div class="card mb-5">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-3">
                          <h6 class="mb-0">Nome:</h6>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">
                              @if(isset($nomeAleatorio))
                                <p> {{ $nomeAleatorio }}</p>
                                         @endif</p> 
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Email:</h6>
                          </div>
                          <div class="col-sm-9">
                <p class="text-muted mb-0">
                    @if(isset($email)) <!-- Verificando se a variável $email está definida -->
                        <p>{{ $email }}</p> <!-- Exibindo o valor de $email -->
                    @endif
                </p>
            </div>
                        </div>
                       
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Telefone:</h6>
                          </div>
                          <div class="col-sm-9">
                <p class="text-muted mb-0">
                    @if(isset($telefone)) <!-- Verificando se a variável $email está definida -->
                        <p>{{ $telefone }}</p> <!-- Exibindo o valor de $email -->
                    @endif
                </p>
            </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Endereço:</h6>
                          </div>
                          <div class="col-sm-9">
                <p class="text-muted mb-0">
                    @if(isset($endereco)) <!-- Verificando se a variável $email está definida -->
                        <p>{{ $endereco }}</p> <!-- Exibindo o valor de $email -->
                    @endif
                </p>
            </div>
                        </div>
                        
                      
                       
                    </div>
                    
                    </div>
                    
                    
                  
                    <div class="card mb-4 mb-lg-0">
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
                </section>
            
                <!-- Inclua o script JS do Bootstrap no final do corpo -->
            
                            
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