<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cosmo/bootstrap.min.css"  crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0b5b009d42.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- JQuery Link -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
 
 
    <title> Clinica veterinaria </title>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm sticky-top">
            <a class="navbar-brand" href="#central"><img class="img-fluid" width="70" src="images/logo2.png"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MenuAdmin"
                aria-controls="MenuPrincipal" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="MenuAdmin">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#central"><i class="fas fa-dog "></i>
                            Perros</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#central"><i class="fas fa-cat"></i>
                            Gatos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#central"><i class="fas fa-otter"></i>
                            Mamíferos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#central"><i class="fas fa-kiwi-bird"></i>
                            Aves</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#central"><i class="fas fa-frog"></i>
                            Reptiles</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#central"><i class="fas fa-fish"></i>
                            Peces</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#central"><i class="fas fa-heartbeat"></i>
                            Servicios</a>
                    </li>
                </ul>
                <hr />
            </div>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
            </ul>
        </div>
        
    </nav>

          
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>

<div class="container-fluid p-0 m-0">     
  <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/carousel.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/carousel2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/carouse3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>Juguetes</h1>
        <p>Para los consentidos del hogar</p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 
</div>
</div>   
 
</div>

<!--Explicación del proyecto-->
<div id="central" style="background-color:#2780E3;color:white;padding:20px; "> 
    <p class="text-center">Universidad Autónoma De San Luis Potosí</p>
    <p class="text-center">Facultad de Ingeniería </p>
    <p class="text-center">Área de Ciencias de la Computación </p>
    <p class="text-center">Este proyecto fue realizado para la materia de proyecto integrador, está pensado como respuesta a la problemática de una veterinaria que 
    busca mejorar su sistema de administración interna de manera que se vuelva más intuitivo para los empleados. 
    Siendo un proyecto de innovación se utilizaron herramientas que actualmente son la vanguardia en tecnología.</p>
    <p class="text-center">Desarrollado por: Luis Carlos Bacasehua Morales, Francisco Javier Gómez Vázquez, Valeria Estefania Córtez Gutiérrez, Jairo Trujillo Méndez, José Emmanuel Escobar Chavez</p>
</div>