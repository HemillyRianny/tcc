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
                    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2> {{ request('nomeAleatorio') }}</h2>
                        @if ($id || $nomeAleatorio || $email || $telefone || $endereco )
                            <div class="form-group">
                                <a href="{{ route('criar', [ 'id'=>$id,'nomeAleatorio' => $nomeAleatorio, 'email' => $email,'telefone' => $telefone,'endereco' => $endereco,]) }}" class="btn" style="background-color: #243A73; color: white; border-radius: 25px; padding: 10px 20px; margin: 40px;"> Entrar em Contato</a>
                            </div>
                        @endif
                    </div>
                    
           
                <div class="row">
                  <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                      <div class="card-body">
                        @if ($usuarioAleatorio)
                        <h2>{{ $usuarioAleatorio->name }}</h2>
                        @if (count($usuarioAleatorio->necessidades) > 0)
                            @foreach ($usuarioAleatorio->necessidades as $necessidade)
                                <div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">{{ $necessidade->item->nome }}</p>
                                    <div style="display: flex; align-items: center;">
                                        <div class="progress rounded" style="height: 5px; width: 100%;">
                                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p style="margin-left: 10px;">{{ $necessidade->quantidade }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Este usuário não tem nenhuma necessidade registrada.</p>
                        @endif
                    @endif
                    @if ($usuarioAleatorio)
                    <h2>{{ $usuarioAleatorio->name }}</h2>
                    @if (count($usuarioAleatorio->disponabilidades) > 0)
                        @foreach ($usuarioAleatorio->disponabilidades as $disponabilidade)
                            <div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">{{ $disponabilidade->item->nome }}</p>
                                <div style="display: flex; align-items: center;">
                                    <div class="progress rounded" style="height: 5px; width: 100%;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p style="margin-left: 10px;">{{ $disponabilidade->quantidade }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Este usuário não tem nenhuma disponibilidade registrada.</p>
                    @endif
                @endif
                    
                    
                           
                       
                       
                        
                       
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                      <div class="card-body">
                        
                          
                
                      
                   
                          
                       
                       
                        
                       
                        
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