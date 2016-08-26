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
                    <li><a href="#">empresa</a></li>
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
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="trabalhe-header">
                    <h1 class="animate top">Trabalhe Conosco</h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
    </div>
</section>
<div class="container">
    <div class="contatos">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12 animate top">
                <div class="titulo-contatos-form">
                    <h3>Envie seu currículo</h3>
                </div>

                <form id="contact" class="form-contatos" onSubmit="return false" method="post">
                    <h4 class="form-header">Utilize o formulário abaixo para enviar seu currículo para a Casa do Pastel.</h4>
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
                        <label for="exampleInputFile">Envie seu currículo</label>
                        <input type="file" id="exampleInputFile">
                    </div>
                    <div class="button-send">
                        <a onclick="sending()"><img src="images/button-send.png" alt="Enviar"> <span
                                class="button-send-txt">Enviar</span></a>
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
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
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
<div class="buttom-top hidden-xs">
    <div class="go-top"><img src="images/button-top.png" alt="topo"></div>
</div>
<div class="clearfix"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>