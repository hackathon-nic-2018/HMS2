<!doctype html> 
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Hotel Hackathon - Inicio </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/customcss.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">    
</head>

<body>
    <div class="brand"><img src="img/logotipo.png" style=" padding: 0; width: 15%" ></div>

    <nav class= "navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Cambiar navigacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! url('/') !!}">Hotel Hackathon</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{!! url('/') !!}">Inicio</a>
                    </li>
                    <li>
                        <a href="{!! url('/reserva') !!}">Reservar</a>
                    </li>
                    <li>
                        <a href="{!! url('/encontrar') !!}">Como llegar</a>
                    </li>
                    <li>
                        <a href="{!! url('/acercade') !!}">Acerca de</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id = "carousel-example-generic" class="carousel slide"> 
                        
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/portada.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/matrimonial.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/banos.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/restaurante.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/conferencias.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/piscina.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/cabanas.png" alt="">
                            </div>
                        </div>

                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
    
    <!-- Solo sirve para ver cuanto tarda en transicionar los slides -->
    <script>
        $('.carousel').carousel({
            interval: 5000
        }) 
    </script>

</body>
</html>