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
                    <li class="dropdown active-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Empresa <span class="caret"></span></a>
                        <ul class="dropdown-menu teste">
                            <li class="menu-principal"><a href="empresa.php">sobre nós</a></li>
                            <li class="menu-principal"><a href="espacokids.php">espaço kids</a></li>
                        </ul>
                    </li>
                    <li><a href="contato.php">contatos</a></li>
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
                <h1 class="animate top">Espaço Kids</h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="empresa-kids">
                <p>Espaço Kids na Casa do Pastel da Ângelo Bolson, 338</p>

                <p>Mamães e papais a Casa do Pastel da Ângelo Bolson, tem um espaço pensado para a criançada, com
                    brinquedos pedagógicos, jogos recreativos, vídeos, brincadeiras lúdicas e principalmente com o
                    serviço de recreacionista.</p>

                <p>Aberto todos os dias da semana, no horário de atendimento da Casa</p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 espacokids-carousel">
            <div class="owl-carousel">
                <img class="item" src="images/img-espacokids-1.png" alt="">
                <img class="item" src="images/img-espacokids-2.png" alt="">
                <img class="item" src="images/img-espacokids-3.png" alt="">
            </div>
        </div>
    </div>

</div>
<footer class="empresa">
    <div class="clearfix"></div>
    <div class="icon-facebook animate bottom">
        <a href="https://www.facebook.com/casadopastel.pastelaria/?fref=ts" target="_blank">
            <img src="images/icon-facebook.png" alt="Facebook"/>
        </a>
    </div>
    <div class="copy animate bottom">
        <p>© Copyright 2016 Casa do Pastel Todos os Direitos Reservados.</p>
    </div>
</footer>
<div class="buttom-top hidden-xs">
    <div class="go-top"><img src="images/button-top.png" alt="topo"></div>
</div>
<div class="clearfix"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: false,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: false
            }
        }
    });
</script>
</body>
</html>