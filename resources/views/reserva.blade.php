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
                    
            <link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />
                    

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
                                <a class="navbar-brand" href="{!! url('master') !!}">Hotel Hackathon</a>
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
                        
                        <form role="form" method="POST" action="{!! url('/reserva') !!}">
                            {{csrf_field()}}
                            <div class="panel panel-primary setup-content" id="step-1">
                                <div class="panel-heading">
                                   <h3 class="panel-title">Información Personal</h3>
                               </div>
                               <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">Nombres</label>
                                    <input maxlength="100" type="text" name="nombre" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Apellidos</label>
                                    <input maxlength="100" type="text" name="apellido" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input maxlength="100" type="text" name="correo" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Teléfono</label>
                                    <input maxlength="100" type="text" name="telefono" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Identificación</label>
                                    <input maxlength="100" type="text" name="identificacion" class="form-control"/>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="submit">Siguiente</button>
                            </div>
                        </div>
                        <!-- Piso, Tipo de habitacion, Descripcion de  la habitacion, Tiempo de reservacion-->
                        <div class="panel panel-primary setup-content" id="step-2">
                                <div class="panel-heading">
                                   <h3 class="panel-title">Información de Reservación</h3>
                               </div>
                               <div class="panel-body">
                                <div class="form-group">
                                    <label for="selectPiso">Numero de Piso</label>
                                    <select class="form-control" id="selectPiso">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="selectTipoHabitacion">Tipo de Habitación</label>
                                    <select class="form-control" id="selectTipoHabitacion">
                                    <option>Sencilla</option>
                                    <option>Suite</option>
                                    <option>Matrimonial</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Tiempo de reservación</label>
                                    <input maxlength="100" type="text"  class="form-control"/>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
                            </div>
                        </div>

                        <div class="panel panel-primary setup-content" id="step-3">
                                <div class="panel-heading">
                                   <h3 class="panel-title">Resumen</h3>
                               </div>
                               <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">Nombres</label>
                                    <input maxlength="100" type="text"  class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Apellidos</label>
                                    <input maxlength="100" type="text"  class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input maxlength="100" type="text"  class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Teléfono</label>
                                    <input maxlength="100" type="text"  class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Identificación</label>
                                    <input maxlength="100" type="text"  class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="selectPiso">Numero de Piso</label>
                                    <select class="form-control" id="selectPiso">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="selectTipoHabitacion">Numero de Piso</label>
                                    <select class="form-control" id="selectTipoHabitacion">
                                    <option>Sencilla</option>
                                    <option>Suite</option>
                                    <option>Matrimonial</option>
                                </select>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button">Finalizar</button>
                            </div>
                        </div>
            </form>
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
            
            <style>
    .stepwizard-step p {
        margin-top: 0px;
        color:white;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
        background-color: darkblue;
        padding-top: 12px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px; 
    }
    .stepwizard-step button[disabled] {

    }
    .stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
        opacity:1 !important;
        color:#bbb;
    }
    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content:" ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-index: 0;
    }
    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }
    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 11.5px;
        line-height: 1.428571429;
        border-radius: 15px;
    }                
            </style>

            </body>

            <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
            <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <!-- <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script> -->

            <script src="assets/js/gsdk-bootstrap-wizard.js"></script>

            <script src="assets/js/gsdk-bootstrap-forms.js"></script>

            <script src="assets/js/jquery.validate.min.js"></script>

            </html> 