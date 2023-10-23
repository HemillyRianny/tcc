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
                
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                          <div class="card-body">
                            
                            <h6 style="color:black;">  <a class="mb-4" style="color:black;" href="{{ route('doador.create') }}">   Quero ser Doador
                            </a>
                         </h6>
                     
                          </div>
                        </div>
                      </div>
               
                      <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                          <div class="card-body">
                            
                            <h6 style="color:black;">  <a class="mb-4" style="color:black;" href="{{ route('receptor.create') }}">   Quero ser Receptor
                            </a>
                         </h6>
                     
                          </div>
                        </div>
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