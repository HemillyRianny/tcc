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
                        <form class="login-form" method="POST" action="{{ route('login-custon', ['id'=>$id,'nomeAleatorio' =>$nomeAleatorio, 'email'=>$email, 'telefone'=>$telefone, 'endereco'=>$endereco]) }}">
                            @csrf
                            <h2 style="color:#243A73;" id="login">Login</h2>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Senha:</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-check" >
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Lembrar-me
                                    </label>
                                    @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        Esqueceu sua senha?
                                    </a>
                                @endif
            
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
            <br>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">
                                        Registre-se
                                    </a>
                                @endif
                            </div>
                          <!--  <input type="hidden" name="nomeAleatorio" value="{{ request('nomeAleatorio') }}">
                            <input type="hidden" name="email" value="{{ $email }}">-->
            </form> 
                        </form>
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