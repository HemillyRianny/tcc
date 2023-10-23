
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de Alimentos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        /* CSS fornecido */
        h1 {
            text-align: center;
        }

        .opaco {
            width: 100%;
            height: 400px;
            background-color: rgba(255, 255, 255, 0.425);
            opacity: 1;
        }

        .third:hover {
            box-shadow: 0 0 10px 0 #243A73 inset, 0 0 10px 4px #243A73;
        }

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

        .principal {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #A5BECC;
            min-height: 100vh;
        }

        .info {
            width: 90%;
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.425);
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .caixaLogin {
            width: 90%;
            max-width: 500px;
            background-color: rgba(255, 255, 255, 0.425);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        /* CSS atualizado para responsividade */
        @media (min-width: 768px) {
            .principal {
                flex-direction: row;
            }

            .info {
                margin-right: 20px;
            }

            .caixaLogin {
                margin-left: 20px;
            }
        }
        body{
margin: 0;
background-color:#A5BECC;
        }
    </style >
</head>
<body>
<h1 style="color:#243A73;" id="titulo">Doação de Alimentos</h1>


   






    <div class="principal">
    
        <div class="info">
    

            <button type="button"  data-toggle="modal" data-target="#myModal" >
            <img src="{{ url('/imagens/logo.png') }}" alt="Imagem de exemplo" class="imagem">

            </button>
        </div>

        <div class="caixaLogin">
            <form class="login-form" method="GET"
            action="/"
            >
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
</form> 
            </form>
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sobre nós</h4>
                </div>
                <div class="modal-body">
                    <p>
                        Nos últimos anos, a perda e desperdício de alimentos tem definido uma problemática
                        multifacetada, que desafia a elaboração e execução de políticas públicas: grosso modo, do
                        lado da segurança alimentar, por enviar anualmente um bilhão de toneladas de alimentos
                        produzidos para o consumo humano para o lixo, enquanto algumas instituições carecem de
                        alimentos. Dessa forma, nota-se uma necessidade de controlar o destino das doações, para
                        evitar a falta e o desperdício. Uma dessas formas seria a partir de um sistema de
                        redistribuição de alimentos por meio de um website. Porém, ainda não existe essa solução no
                        mercado. Sendo assim, este projeto propõe um site que consiga correlacionar pessoas que
                        queiram doar às instituições que queiram receber, com o objetivo de melhorar o gerenciamento
                        das doações.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</body>
</html>
