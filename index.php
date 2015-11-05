<!DOCTYPE html>
<html>
    <head>
        <title>Descubre Ibagué</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    </head>
    <body id="paginaDescubreIbague" data-spy="scroll" data-target=".navbar" data-offset="50" style="font-family: 'Roboto', sans-serif; font-weight: lighter;">
        <div style="position: absolute; z-index: 2; float:top; opacity: 0.9; width: 100%;">
            <nav class="navbar navbar-default" style=" opacity: 0.7;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <img src="img/logo.png" class="img-rounded" width="50" height="51" style="float: left; clear: right; position: relative; vertical-align: central;"/>
                        <a class="navbar-brand" href="#">Descubre Ibagu&eacute;</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                                               
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar" style="font-size: 17px;">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesi&oacute;n</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#">Inicio</a></li>
                            <li><a href="#">Sitios</a></li>
                            <li><a href="#">La ciudad</a></li>
                            <li><a href="#">Historia</a></li>
                            <li><a href="#">Quienes somos</a></li>
                            <li><a href="#">Cont&aacute;ctenos</a></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div style="float: top; z-index: 1; position: relative; clear: both;">
            <div id="miCarrusel" class="carousel slide" data-ride="carousel">
                <!-- Indicadores  -->
                <ol class="carousel-indicators">
                    <li data-target="#miCarrusel" data-slide-to="0" class="active"></li>
                    <li data-target="#miCarrusel" data-slide-to="1"></li>
                    <li data-target="#miCarrusel" data-slide-to="2"></li>
                    <li data-target="#miCarrusel" data-slide-to="3"></li>
                </ol>
                <!-- envoltorio de las imagenes -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/catedral nocturna navidad2.jpg" style="width: 100%; height: 800px;">
                        <div class="carousel-caption">
                            <h3>Catedral de Ibagu&eacute;</h3>
                            <p>Un icono de la cultura adornada en navidad.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/catedral emh.jpg" style="width: 100%; height: 800px;">
                        <div class="carousel-caption">
                            <h3>Catedral de Ibagu&eacute;</h3>
                            <p>Un icono de la cultura durante un dia de la gran ciudad.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/cultural 1.JPG" style="width: 100%; height: 800px;">
                        <div class="carousel-caption">
                            <h3>Festival del folclor de Ibagu&eacute;</h3>
                            <p>La gran fiesta cultural del Tolima</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/cultural 2.JPG" style="width: 100%; height: 800px;">
                        <div class="carousel-caption">
                            <h3>Festival del folclor de Ibagu&eacute;</h3>
                            <p>La gran fiesta cultural del Tolima</p>
                        </div>
                    </div>
                </div>
                <!-- controles de derecha e izquierda -->
                <a class="left carousel-control" href="#miCarrusel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only"> Anterior </span>
                </a>
                <a class="right carousel-control" href="#miCarrusel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only"> Siguiente </span>
                </a>
            </div>
        </div>
        <!-- Seccion que controla la zoma verde -->

        <div style="background:#4caf50; margin: 0;padding: 2px;">
            <div class="container-fluid">
                <h3 class="text-center" style="color: white">Sitios destacados de la ciudad</h3>
                <h5 class="text-center" style="color: white">Estos son algunas de las categorias destacaas por los usuarios de Descubre Ibagu&eacute;</h5>
            </div>
            <div class="panel-group" style="">
                <div class="row" style="margin: 0; padding: 0;">
                    <!-- PANEL DE RESTAURANTES -->
                    <div class="col-sm-3" style=" margin-top: 5px; margin-bottom: 5px;">
                        <!-- inicio del slide -->
                        <div class="panel panel-default">
                            <div class='panel panel-heading' style="border-radius:0.5px;">
                                <h4 class="text-center">Restaurantes</h4>
                                <h4 class="text-center"><small>Los mejores de la ciudad</small></h4>
                                <p></p>
                            </div>
                            <div class="panel panel-body" style="padding: 0px;">
                                <div id="caruousel-restaurantes" class="carousel slide" data-ride="carousel" >
                                    <!-- Indicadores  -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#caruousel-restaurantes" data-slide-to="0" class="active"></li>
                                        <li data-target="#caruousel-restaurantes" data-slide-to="1"></li>
                                        <li data-target="#caruousel-restaurantes" data-slide-to="2"></li>
                                        <li data-target="#caruousel-restaurantes" data-slide-to="3"></li>
                                    </ol>
                                    <!-- envoltorio de las imagenes -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="img/Restaurantes/RestauranteToyWan.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Restaurante ToyWan</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Restaurantes/SonataCafeCoctel3.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Sonata coctel</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Restaurantes/posada del arriero.JPG" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Posada del arriero</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Restaurantes/restauranteAltavista04.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Altavista internacional</h5>
                                            </div>
                                        </div>
                                        <!-- controles de derecha e izquierda -->
                                        <a class="left carousel-control" href="#caruousel-restaurantes" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only"> Anterior </span>
                                        </a>
                                        <a class="right carousel-control" href="#caruousel-restaurantes" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only"> Siguiente </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-footer">
                                <!-- pendiente de hacer el footer -->
                            </div>
                        </div>
                        <!-- fin del slide -->
                    </div>
                    <!-- PANEL DE HOTELES -->
                    <div class="col-sm-3" style=" margin-top: 5px; margin-bottom: 5px;">
                        <!-- inicio del slide -->
                        <div class="panel panel-default">
                            <div class='panel panel-heading' style="border-radius:0.5px;">
                                <h4 class="text-center">Hoteles</h4>
                                <h4 class="text-center"><small>Los mas confortables que puedes encontrar</small></h4>
                                <p></p>
                            </div>
                            <div class="panel panel-body" style="padding: 0px;">
                                <div id="caruousel-hoteles" class="carousel slide" data-ride="carousel" >
                                    <!-- Indicadores  -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#caruousel-hoteles" data-slide-to="0" class="active"></li>
                                        <li data-target="#caruousel-hoteles" data-slide-to="1"></li>
                                        <li data-target="#caruousel-hoteles" data-slide-to="2"></li>
                                        <li data-target="#caruousel-hoteles" data-slide-to="3"></li>
                                    </ol>
                                    <!-- envoltorio de las imagenes -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="img/Hoteles/HotelOcobosPlaza5.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Hotel Ocobos Plaza</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Hoteles/hotelDannCombeima04.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Hotel Dann Combeima</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Hoteles/hotelAmbalaIbague05.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Hotel Ambal&aacute;</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Hoteles/hotelsuiza2.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Hotel Suiza</h5>
                                            </div>
                                        </div>
                                        <!-- controles de derecha e izquierda -->
                                        <a class="left carousel-control" href="#caruousel-hoteles" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only"> Anterior </span>
                                        </a>
                                        <a class="right carousel-control" href="#caruousel-hoteles" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only"> Siguiente </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-footer"></div>
                        </div>
                        <!-- fin del slide -->
                    </div>
                    <!-- PANEL DE RECREATIVOS -->
                    <div class="col-sm-3" style=" margin-top: 5px; margin-bottom: 5px;">
                        <!-- inicio del slide -->
                        <div class="panel panel-default">
                            <div class='panel panel-heading' style="border-radius:0.5px;">
                                <h4 class="text-center">Sitios recreativos</h4>
                                <h4 class="text-center"><small>Un lugar para el esparcimiento con la familia</small></h4>
                                <p></p>
                            </div>
                            <div class="panel panel-body" style="padding: 0px;">
                                <div id="caruousel-recreativos" class="carousel slide" data-ride="carousel" >
                                    <!-- Indicadores  -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#caruousel-recreativos" data-slide-to="0" class="active"></li>
                                        <li data-target="#caruousel-recreativos" data-slide-to="1"></li>
                                        <li data-target="#caruousel-recreativos" data-slide-to="2"></li>
                                        <li data-target="#caruousel-recreativos" data-slide-to="3"></li>
                                    </ol>
                                    <!-- envoltorio de las imagenes -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="img/Recreativos/PlazaDeBolivarIbague1.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Plaza de Bolivar</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Recreativos/parqueCentenario01.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Parque Centenario</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Recreativos/parqueDeLaMusica04.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Pargue de la m&uacute;sica</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Recreativos/parqueMurilloToro01.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Parque Murillo Toro</h5>
                                            </div>
                                        </div>
                                        <!-- controles de derecha e izquierda -->
                                        <a class="left carousel-control" href="#caruousel-recreativos" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only"> Anterior </span>
                                        </a>
                                        <a class="right carousel-control" href="#caruousel-recreativos" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only"> Siguiente </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-footer"></div>
                        </div>
                        <!-- fin del slide -->
                    </div>
                    <!-- PANEL DE CULTURAL -->
                    <div class="col-sm-3" style=" margin-top: 5px; margin-bottom: 5px;">
                        <!-- inicio del slide -->
                        <div class="panel panel-default">
                            <div class='panel panel-heading' style="border-radius:0.5px;">
                                <h4 class="text-center">Sitios culturales</h4>
                                <h4 class="text-center"><small>Lo mejor de la cultura del Tolima a tu mano</small></h4>
                                <p></p>
                            </div>
                            <div class="panel panel-body" style="padding: 0px;">
                                <div id="caruousel-cultural" class="carousel slide" data-ride="carousel" >
                                    <!-- Indicadores  -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#caruousel-cultural" data-slide-to="0" class="active"></li>
                                        <li data-target="#caruousel-cultural" data-slide-to="1"></li>
                                        <li data-target="#caruousel-cultural" data-slide-to="2"></li>
                                        <li data-target="#caruousel-cultural" data-slide-to="3"></li>
                                    </ol>
                                    <!-- envoltorio de las imagenes -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="img/Culturales/ConservatorioDelTolima3.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Conservatorio del Tolima</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Culturales/MuseoDeArteDelTolima1.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Museo del arte</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Culturales/TeatroTolima2.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Teatro Tolima</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Culturales/catedral05.jpg" style="width: 100%; height: 225px;">
                                            <div class="carousel-caption">
                                                <h5>Catedral de Ibagu&eacute;</h5>
                                            </div>
                                        </div>
                                        <!-- controles de derecha e izquierda -->
                                        <a class="left carousel-control" href="#caruousel-cultural" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only"> Anterior </span>
                                        </a>
                                        <a class="right carousel-control" href="#caruousel-cultural" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only"> Siguiente </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-footer"></div>
                        </div>
                        <!-- fin del slide -->
                    </div>
                </div>
            </div>
        </div>       
        <footer class="container-fluid" style="background:#1796D2; color: white;">
            <h4 class="text-center">Para conocer y disfrutar debes vistarla y Descubre Ibagu&eacute; te ayuda a vivir una grata experiencia turistica</h4>
            <p class="text-center">Desarrollado por: CAFE Software  - Todos los derechos reservados</p>
            <p>Todos los derechos reserv</p>
        </footer>
    </body>
</html>
