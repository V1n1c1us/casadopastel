<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Casa do Pastel</title>

    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<!-- MENU/HEADER-->
<nav class="navbar animate top">
    <div class="container">
        <div class="area-logo"><a href="http://casadopastel.com.br/"><img src="images/logoCasaDoPastel.png"
                                                                          alt="Casa do Pastel - Santa Maria"> </a></div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navigator">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="transition-delay: 0s; animation-delay: 0s;">
                    <li><a href="index2.php">home</a></li>
                    <li><a href="#">cardápio</a></li>
                    <li><a href="#">pedido online</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Empresa <span class="caret"></span></a>
                        <ul class="dropdown-menu teste">
                            <li class="menu-principal"><a href="empresa.php">sobre nós</a></li>
                            <li class="menu-principal"><a href="espacokids.php">espaço kids</a></li>
                        </ul>
                    </li>
                    <li class="active-menu"><a href="contato.php">contatos</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
</nav>
<div class="clearfix"></div>
<!-- END MENU/HEADER-->
<section class="titulo-contato">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div id="cardapio-header" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h1 class="animate top">Contatos</h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
</section>
<div class="container">
    <div class="contatos">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 animate top">
                    <div class="titulo-contatos">
                        <h3>Delivery</h3>
                    </div>
                    <ul class="info">
                        <li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Ângelo Bolson,468 | Santa Maria,RS
                            <a onClick="showMap('#mapAgBolson')" id="mapa">Ver no mapa</a>
                        </li>
                        <li><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (55)
                            <div class="telefone">3218 1008</div>
                        </li>
                        <li><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Segunda a Domingo: 19:00 hs - 00:00
                            hs
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 animate top">
                    <div class="titulo-contatos">
                        <h3>Express</h3>
                    </div>
                    <ul class="info">
                        <li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Niereraurer, 1575 | Santa Maria,RS
                            <a onClick="showMap('#mapNiere')" id="mapa">Ver no mapa</a>
                        </li>
                        <li><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (55)
                            <div class="telefone">3217 4037</div>
                        </li>
                        <li><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Segunda a Domingo: 19:00 hs - 00:00
                            hs
                        </li>

                    </ul>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 animate top">
                    <div class="titulo-contatos">
                        <h3>Ângelo Bolson</h3>
                    </div>
                    <ul class="info">
                        <li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Ângelo Bolson,338 | Santa Maria,RS
                            <a onClick="showMap('#mapAgBolson1')" id="mapa">Ver no mapa</a
                            ></li>
                        <li><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (55)
                            <div class="telefone">3218 6426</div>
                        </li>
                        <li><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Segunda a Domingo: 19:00 hs - 00:00
                            hs
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 animate top">
                    <div class="titulo-contatos">
                        <h3>Florianópolis - SC</h3>
                    </div>
                    <ul class="info">
                        <li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Av. das Rendeiras,1228 - Lagoa da
                            Conceição
                            <a onClick="showMap('#mapLagoa')" id="mapa">Ver no mapa</a><br>
                        </li>
                        <li><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (48)
                            <div class="telefone">3207 5794</div>
                        </li>
                        <li><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Segunda a Domingo: 19:00 hs - 00 hs
                        </li>

                    </ul>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 animate top">
                    <div class="titulo-contatos">
                        <h3>São José</h3>
                    </div>
                    <ul class="info">
                        <li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Rua Brasilpinho,49 - Kobrasol
                            <a onClick="showMap('#map')" id="mapa">Ver no mapa</a>
                        </li>
                        <li><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (48)
                            <div class="telefone">3234 9411</div>
                        </li>
                        <li><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Segunda a Domingo: 19:00 hs - 00 hs
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 animate top">
                <div class="titulo-contatos-form">
                    <h3>Formulário de Contatos</h3>
                </div>
                <form id="contact" class="form-contatos" onSubmit="return false" method="post">

                    <input type="hidden" value="1" id="send" name="send">

                    <div class="form-group">
                        <input type="nome" class="form-control placetxt" id="nome" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control placetxt" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="fone" class="form-control placetxt" id="fone" placeholder="Fone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control placetxt" placeholder="Mensagem"></textarea>
                    </div>
                    <div class="button-send">
                        <a onclick="sending()"><img src="images/button-send.png" alt="Enviar"> <span class="button-send-txt">Enviar</span></a>
                    </div>
                    <p id="send-info2"></p>

                    <script>
                        function sending() //AJAX para enviar o email, vai no html
                        {
                            var posting = $.post("inc/sendmail.php", $("#contact").serialize());
                            posting.done(function (data) {
                                $("#send-info2").html(data); //id da div de retorno
                            });
                        }
                    </script>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a href="https://www.facebook.com/casadopastel.pastelaria/?fref=ts" target="_blank">
                    <img src="images/middle-facebook-contato.png" alt="" class="img-contatos animate top">
                </a>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="clearfix"></div>
    <div class="icon-facebook animate bottom">
        <a href="https://www.facebook.com/casadopastel.pastelaria/?fref=ts" target="_blank">
            <img src="images/icon-facebook.png" alt="Facebook"/>
        </a>
    </div>
    <div class="copy animate bottom">
        <p>© Copyright 2016 Casa do Pastel Todos os Direitos Reservados.</p>
    </div>
    </div>
</footer>
<div class="black-mask" onClick="hideMapa();"></div>
<div class="mapa">
    <div id="closeBarX" class="barClose col-sm-12" onClick="hideMapa();"><span
            class="closeBarLocalTxt hidden-md hidden-lg">Localização</span> <i class="fa fa-close"></i></div>
    <!-- Ag Bolson -->
    <div id="mapAgBolson" style="height:300px; display: none;"></div>
    <!-- Niere -->
    <div id="mapNiere" style="height:300px; display: none;"></div>
    <!-- Ag Bolson 1-->
    <div id="mapAgBolson1" style="height:300px; display: none;"></div>
    <!-- Floripa -->
    <div id="mapLagoa" style="height:300px; display: none;"></div>
    <!-- São José -->
    <div id="map" style="height:300px;  display: none;"></div>
</div>
<div class="buttom-top hidden-xs">
    <div class="go-top"><img src="images/button-top.png" alt="topo"></div>
</div>
<div class="clearfix"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js"></script>

<script>


    function showMap(elemento) {
        console.log('ok');
        $('.barClose').addClass('closeBar');
        $('.black-mask').css('display', 'block');
        $('#mapAgBolson').removeClass('showMap');
        $('#mapNiere').removeClass('showMap');
        $('#mapAgBolson1').removeClass('showMap');
        $('#mapLagoa').removeClass('showMap');
        $('#map').removeClass('showMap');

        $('' + elemento + '').addClass('showMap');
        initMap();
    }
    function hideMapa() {
        $('#mapAgBolson').removeClass('showMap');
        $('#mapNiere').removeClass('showMap');
        $('#mapAgBolson1').removeClass('showMap');
        $('#mapLagoa').removeClass('showMap');
        $('#map').removeClass('showMap');
        $('.black-mask').css('display', 'none');
        $('.barClose').removeClass('closeBar');
    }

</script>
<script>
    window.onload = initializerLoad;
    window.onresize = initMap;

    function initializerLoad() {
        initMap();
        alturaCalc();

    }
    function alturaCalc() {
        var altura = screen.height;
        $('.black-mask').css('heigth', altura);
    }


    function initMap() {
        alturaCalc();
        var myLatLng = {lat: -27.5931177, lng: -48.6152665};
        var myLatLngAgB = {lat: -29.700486, lng: -53.820717}; //angelo bolson 468
        var myLatLngAgB1 = {lat: -29.7010498, lng: -53.8202196}; //angelo bolson 338
        var myLatLngNiere = {lat: -29.687847, lng: -53.810034}; // niere
        var myLatLngLagoa = {lat: -27.608675, lng: -48.452234}; // lagoa C

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            scrollwheel: false,
            zoom: 16
        });

        var mapAgBolson = new google.maps.Map(document.getElementById('mapAgBolson'), {
            center: myLatLngAgB,
            scrollwheel: false,
            zoom: 16
        });

        var mapAgBolson1 = new google.maps.Map(document.getElementById('mapAgBolson1'), {
            center: myLatLngAgB1,
            scrollwheel: false,
            zoom: 16
        });

        var mapNiere = new google.maps.Map(document.getElementById('mapNiere'), {
            center: myLatLngNiere,
            scrollwheel: false,
            zoom: 16
        });

        var mapLagoa = new google.maps.Map(document.getElementById('mapLagoa'), {
            center: myLatLngLagoa,
            scrollwheel: false,
            zoom: 16
        });


        // Create a marker and set its position.
        var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            title: 'Pastelaria Casa do Pastel'
        });

        var markerAgBolson = new google.maps.Marker({
            map: mapAgBolson,
            position: myLatLngAgB,
            title: 'Pastelaria Casa do Pastel'
        });

        var makerAgBolson1 = new google.maps.Marker({
            position: myLatLngAgB1,
            map: mapAgBolson1,
            title: 'Pastelaria Casa do Pastel'
        });
        var makerNiere = new google.maps.Marker({
            position: myLatLngNiere,
            map: mapNiere,
            title: 'Pastelaria Casa do Pastel'
        });
        var markerLagoa = new google.maps.Marker({
            position: myLatLngLagoa,
            map: mapLagoa,
            title: 'Pastelaria Casa do Pastel'
        });
    }
</script>
</body>
</html>