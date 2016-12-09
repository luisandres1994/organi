@extends('layout')
       @section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Inicio <small>Organizacion Juventudes</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i> Inicio
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-newspaper-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">3</div>
                                        <div>Nuevas Actividades</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-male fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>Nuevos Activistas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="  fa fa-pencil-square-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">4</div>
                                        <div>Cursos de Formacion</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Noticas recientes</h3>
                            </div>


                            <div class="panel-body">


                        
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              </ol>
                                <div class="carousel-inner">
                                <div class="item active">
                                <img src="./imagenlista3.png" alt="First slide">
                                <div class="carousel-caption">
                                 </div>
                                  </div>
                              <div class="item">
                             <img src="./imagenlista2.png" alt="Second slide">
                             <div class="carousel-caption">
                            </div>
                            </div>
                         <div class="item">
                        <img src="./imagenlista4.png" alt="Third slide">
                        <div class="carousel-caption">
                        </div>
                       </div>
                        </div>
                         <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
                      </div>
                      </div>



                    </div>
                    <div class="text-right">
                                    <a href="#">Ver Todas Las Actividades <i class="fa fa-arrow-circle-right"></i></a>
                                </div>


                    </div>




                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Noticas recientes</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Justo ahora</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendario Actualizado
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Hace 4 Minutos</span>
                                        <i class="fa fa-fw fa-comment"></i> Nueva Mencion en twiiter
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Hace 23 Minutos</span>
                                        <i class="fa fa-fw fa-male"></i> 8 Nuevos Activistas en Miranda
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Hace 46 Minutos</span>
                                        <i class="fa fa-fw fa-calendar"></i> 2 Nuevas Actividades en Miranda
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Hace 1 Hora</span>
                                        <i class="fa fa-fw fa-check"></i> Meta Cumplida Juventudes Baruta!
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Hace 2 Horas</span>
                                        <i class="fa fa-fw fa-bars"></i> Nueva Sabana de tweets
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Ayer</span>
                                        <i class="fa fa-fw fa-globe"></i> Nueva Campaña SalvemosAlPais!
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Hace 2 Dias</span>
                                        <i class="fa fa-fw fa-check"></i> Meta Nacional Alcanzada! 
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">Ver Todas Las Actividades <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row x">
                    <div class="col-lg-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Metas Generales</h3>
                            </div>
                            <div class="panel-body">
                                <div id="bar-example"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Metas Organizacion </h3>
                            </div>
                            <div class="panel-body">
                                <div id="bar-example2"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row x">
                    <div class="col-lg-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Metas Activismo</h3>
                            </div>
                            <div class="panel-body">
                                <div id="bar-example3"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Metas Formacion </h3>
                            </div>
                            <div class="panel-body">
                                <div id="bar-example4"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
  
 @endsection