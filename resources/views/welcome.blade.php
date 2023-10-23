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

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap-icons.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link href="css/templatemo-pod-talk.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

    @media (max-width: 768px) {
        .search-form {
            position: static;
            width: 100%;
            margin: 10px 0;
        }
    }
    .img-fluid {
        max-width: 100%;
        height: auto;
    }



</style>



</head>

<body>

    <main>

      


        <section class="hero-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-2">
                            <h1 class="text-white">Doação de Alimentos</h1>

                           

                            <a id="toggleSidebarButton" class="btn custom-btn smoothscroll mt-3" href="cadastros">Faça sua Doação</a>
                            
                           
                            
                        </div>
                        <?php
                        use App\Models\User;
                        
                        $usuariosAleatorios = User::inRandomOrder()
                            ->select('name','id', 'email', 'descricao', 'endereco', 'telefone')
                            ->limit(5)
                            ->get();
                        ?>
                        
                        <div class="owl-carousel owl-theme">
                            @foreach($usuariosAleatorios as $usuarioAleatorio)
                                <div class="owl-carousel-info-wrap item" style="text-align: center; border: 2px solid #000; margin: 10px; padding: 10px;  width:  1o0%; height: 100%;">
                                    <img src="{{ url('/imagens/doacao.png') }}" class="owl-carousel-image img-fluid" alt="" style="width: 100%; height: auto; border-radius: 10px;">
                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2" style="font-size: 1.5em;">
                                            {{ $usuarioAleatorio->name }}
                                         </h4>
                                        <a href="{{ auth()->check()
                                            ? route('home', [
                                                'id' => $usuarioAleatorio->id,
                                                'nomeAleatorio' => $usuarioAleatorio->name,
                                                'email' => $usuarioAleatorio->email,
                                                'telefone' => $usuarioAleatorio->telefone,
                                                'endereco' => $usuarioAleatorio->endereco,
                                            ])
                                            : route('forms2', [
                                                'id' => $usuarioAleatorio->id,
                                                'nomeAleatorio' => $usuarioAleatorio->name,
                                                'email' => $usuarioAleatorio->email,
                                                'telefone' => $usuarioAleatorio->telefone,
                                                'endereco' => $usuarioAleatorio->endereco,
                                            ]) }}"
                                            class="botao-doacao badge" style="padding: 10px 20px; font-size: 1.2em;">Doe Agora</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                    
          

       

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        // if celular 
        //
    </script>

</body>
@endsection
</html>