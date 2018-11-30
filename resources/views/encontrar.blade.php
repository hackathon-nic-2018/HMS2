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
                        <a href="">Acerca de</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-md-7" style="padding-top: 5%;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.3863364813583!2d-86.31168428568263!3d12.154079835577668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f715691a7ca253d%3A0xc842689a45b20872!2sEscuela+de+Hoteler%C3%ADa!5e0!3m2!1ses!2sni!4v1543536402041" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-md-4 text-left">
                    
                    <strong><h3>Dirección:</h3></strong>
                    
                    <h4>Las Brisas, Costado Norte Instituto Manuel Olivares Managua - Managua</h4>
                    
                    <hr></hr>

                    <strong><h3>Teléfono:</h3></strong>
                    <li><h4>(+505) 2255 9122</h4></li>
                    <li><h4>(+505) 2255 9121</h4></li>
                    <li><h4>(+505) 2255 9123</h4></li>
                    <li><h4>(+505) 2255 9120</h4></li>

                    <hr></hr>

                    <strong><h3>Email:</h3></strong>
                    
                    <h4 style="text-transform: lowercase;">hotelhackathon@gmail.com</h4>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
                <div class="container" >
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p style="padding : 15px">Copyright &copy; Soluciones Informaticas Matagalpa 2018-2019</p>
                        </div>
                    </div>
                </div>
            </footer>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>
</html>