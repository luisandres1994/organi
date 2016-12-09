<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Organizacion VP</title>
    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
    <link href="css/plugins/morris.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index2.html">Voluntad Popular</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="imagentw.jpg" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Juventudes Miranda</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Hace 2 horas</p>
                                        <p>La Ley de Amnistía es el primer paso a la reconciliación nacional</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="imagentw.jpg" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Juventudes Miranda</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Ayer a las 6:21 PM</p>
                                        <p>#6A Día Internacional del Deporte.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="imagentw.jpg" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Juventudes Miranda</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Ayer a las 8:32 AM</p>
                                        <p>Nuestro alcalde @dsmolansky está atendiendo esta tarde a los vecinos en ElCigarral, con MiAlcaldíaElHatillo</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Leer todos los mensajes</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{{ Auth::user()->username }}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#squarespaceModal"><i class="fa fa-fw fa-user"></i> Mi Perfil </a>
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li> -->
                        <!-- <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li> -->
                        <li class="divider"></li>
                        <li>
                            <a href={{route('logout')}} ><i class="fa fa-fw fa-power-off" ></i> Cerrar Sesion </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-home"></i> Inicio </a>
                    </li>
                    <li>
                        <a href="organizacionN.html"><i class="  fa fa-group"></i> Organizacion </a>
                    </li>
                    <li>
                        <a href="Actividades6.html"><i class="fa fa-calendar"></i> Activismo </a>
                    </li>
                    <li>
                        <a href="comunicaciones.html"><i class="fa fa-comments"></i> Comunicaciones </a>
                    </li>
                    <li>
                        <a href="formacion.html"><i class="fa fa-mortar-board"></i> Formacion </a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-line-chart"></i> Metas </a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
            
            @yield('content')
       
       </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/data.js"></script>
</body>
</html>