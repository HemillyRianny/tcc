<!doctype html>
<html lang="en">

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

</style>



</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container d-flex justify-content-center">
                <a class="navbar-brand me-lg-4 me-0" href="/">
                    <h1 class="text-white">Doação de Alimentos</h1>
                </a>
            </div>
        </nav>
        


        <section class="hero-section">
            <div class="container">
                <div class="row">

                    <div class="caixaLogin"> 
              
                        @section('content')
          <div class="container">
              <div class="row justify-content-center">
               
                      <div class="card">
                      <h2 style="color:#243A73; text-align:center";  >Registro </h2>
          
                          <div class="card-body">
                              <form method="POST" action="{{ route('register') }}">
                                  @csrf
          
                                  <div class="row mb-3">
                                      <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome:') }}</label>
          
                                      <div class="col-md-8">
                                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          
                                          @error('name')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
                                  
                                 <br>
                 <div class="row mb-3">
                                      <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email:') }}</label>
          
                                      <div class="col-md-8">
                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          
                                          @error('email')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
          <br>
          <div class="row mb-3">
              <label for="telefone" class="col-md-4 col-form-label text-md-end">{{ __('Telefone:') }}</label>
          
              <div class="col-md-8">
                  <input id="telefone" type="tel" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone">
          
                  @error('telefone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          <br>
          <div class="row mb-3">
              <label for="endereco" class="col-md-4 col-form-label text-md-end">{{ __('Endereço:') }}</label>
          
              <div class="col-md-8">
                  <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco">
          
                  @error('endereco')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          <br>
                                  <div class="row mb-3">
                                      <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha:') }}</label>
          
                                      <div class="col-md-8">
                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          
                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
          <br>
                                  <div class="row mb-3">
                                      <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirme sua Senha:') }}</label>
          
                                      <div class="col-md-8">
                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                      </div>
                                  </div>
                                
                                  <div class="row mb-0">
                                      <div class="col-md-6 offset-md-4">
                                          <button type="submit" class="btn btn-primary">
                                              {{ __('Registra-se') }}
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
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

</html>