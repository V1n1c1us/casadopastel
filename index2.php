<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Casa do Pastel</title>

    <!-- Bootstrap -->
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
                    <li class='active-menu'><a href="index2.php">home</a></li>
                    <li><a href="#">cardápio</a></li>
                    <li><a href="#">pedido online</a></li>
                    <li><a href="#">empresa</a></li>
                    <li><a href="contato.php">contatos</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
</nav>
<div class="clearfix"></div>
<!-- END MENU/HEADER-->

<!-- SECTION BANNER-->
<section id="banner-principal" class="animate bottom">
    <div class="item"><img src="images/img-header.png" alt="Casa do Pastel"></div>
    <div class="item"><img src="images/img-header.png" alt="Casa do Pastel"></div>
    <div class="item"><img src="images/img-header.png" alt="Casa do Pastel"></div>
    <div class="item"><img src="images/img-header.png" alt="Casa do Pastel"></div>
</section>
<div class="clearfix"></div>
<!-- END BANNER-->

<!-- SECTION MAIN-->
<section id="middle">
    <div class="container">
        <div id="middle-row" class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animate top"><img class="wow fadeInUp"
                                                                               src="images/middle-facebook.png"
                                                                               alt="Curta no Facebook"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animate top"><img class="wow fadeInUp"
                                                                               src="images/middle-endereco.png"
                                                                               alt="Nossos Endereços"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animate top"><img class="wow fadeInUp"
                                                                               src="images/middle-delivery.png"
                                                                               alt="Delivery"></div>
        </div>
        <div id="peca-site" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding animate top"><img
                class="wow fadeInUp" id="img-peca-site" src="images/middle-peca-site.png" alt="Peça pelo Site"></div>
    </div>
</section>
<div class="clearfix"></div>
<section id="cardapio">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div id="cardapio-header" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h1 class="animate top">Cardápio</h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav navbar " id="cardapio-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <li class="dropdown col-md-2">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Pastéis <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="col-md-12 menu-pasteis-novos menu-pasteis-novos-p2 menu-pasteis-p3"><a onclick="menuList('pasteis-novos')">Novos Sabores</a></li>
                            <li class="col-md-12 menu-pasteis menu-pasteis-p2 menu-pasteis-p3"><a onclick="menuList('pasteis-brocolis')">Brócilis</a></li>
                            <li class="col-md-12 menu-pasteis-calabresa"><a onclick="menuList('pasteis-calabresa')">Calabresa</a></li>
                            <li class="col-md-12 menu-pasteis-camarao"><a onclick="menuList('pasteis-camarao')">Camarão</a></li>
                            <li class="col-md-12 menu-pasteis-carne menu-pasteis-carne-p2"><a onclick="menuList('pasteis-carne')">Carne</a></li>
                            <li class="col-md-12 menu-pasteis-chester"><a onclick="menuList('pasteis-chester')">Chester</a></li>
                            <li class="col-md-12 menu-pasteis-coracao"><a onclick="menuList('pasteis-coracao')">Coração</a></li>
                            <li class="col-md-12 menu-pasteis-frango menu-pasteis-frango-p2"><a onclick="menuList('pasteis-frango')">Frango</a></li>
                            <li class="col-md-12 menu-pasteis-lombo"><a onclick="menuList('pasteis-lombo')">Lombo</a></li>
                            <li class="col-md-12 menu-pasteis-palmito"><a onclick="menuList('pasteis-palmito')">Palmito</a></li>
                            <li class="col-md-12 menu-pasteis-presunto"><a
                                    onclick="menuList('pasteis-presunto')">Presunto</a></li>
                            <li class="col-md-12 menu-pasteis-queijo"><a
                                    onclick="menuList('pasteis-queijo')">Queijo</a></li>
                        </ul>
                    </li>
                    <li class="col-md-2 menu-pasteis-lights menu-pasteis-lights-p2"><a
                            onclick="menuList('pasteis-lights')">Pastéis Lights</a></li>
                    <li class="col-md-2 menu-pasteis-doces menu-pasteis-doces-p2"><a
                            onclick="menuList('pasteis-doces')">Pasteis Doces</a></li>
                    <li class="col-md-2 menu-sanduiches"><a onclick="menuList('sanduiches')">Sanduíches</a></li>
                    <li class="col-md-2 menu-porcoes-extras"><a onclick="menuList('porcoes-extras')"><span
                                class="hidden-md hidden-sm">Porções </span>Extras</a></li>
                    <li class="col-md-2 menu-combokids"><a onclick="menuList('combokids')">Combo Kids</a></li>
                </ul>
            </div>
        </div>
        <div class="row" id="cardapio-itens">
            <!-- PASTEIS-->
            <div class="list-pasteis-novos">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PAULISTA ESPECIAL</h1>

                    <p>Frango especial, calabresa especial, cebola, orégano, mussarela e azeitona</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>MINEIRO </h1>

                    <p>Frango especial, milho, bacon, mussarela, parmesão, provolone e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>IMPERADOR</h1>

                    <p>Coração, molho branco, batata palha, mussarela e champignon</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>MAFIOSO</h1>

                    <p>Coração, bacon, chester fatiado e defumado, frango, mussarela, milho, ervilha e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>AÇORIANO</h1>

                    <p>Calabresa especial, bacon, azeitona preta, mussarela, ovo, cebola e orégano</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>NÁPOLES</h1>

                    <p>Presunto, milho, bacon, mussarela, batata palha e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>TURIM</h1>

                    <p>Chester fatiado e defumado, milho, bacon, mussarela, provolone, parmesão e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CORAÇÃO DOM TINZO</h1>

                    <p>Coração, bacon, mussarela, cebola, orégano e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO MAGNÍFICO</h1>

                    <p>Frango especial, chester fatiado e defumado, palmito, mussarela e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ISCAS SÃO VALENTIM</h1>

                    <p>Iscas de carne, azeitona, cebola, orégano, mussarela e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PAPAI BIG PIG</h1>

                    <p>Lombo de porco assado, azeitona, champignon, milho, bacon, mussarela, provolone, parmesão e
                        catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>DO CHEFE</h1>

                    <p>Calabresa especial, palmito, bacon, azeitona preta, mussarela, provolone, parmesão e catupiry</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-novos-p2')"><img
                            src="images/cardapio-button-left.png" alt="Voltar"></a> <a id="right"
                                                                                       onclick="menuList('pasteis-novos-p2')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <div class="list-pasteis-novos-p2 hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ESCOCÊS</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>SUPREMO</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ISCAS DA SILVA</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-novos')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-novos')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS-->

            <!-- PASTEIS BRÓCOLIS-->
            <div class="list-pasteis-brocolis hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Brócolis, cenoura, ervilha, mussarela e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO II</h1>

                    <p>Brócolis, palmito, mussarela, catupiry e orégano</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ATRAÇÃO FATAL</h1>

                    <p>Brócolis, chester fatiado e defumado,champignon, mussarela, catupiry, parmesão e provolone</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>AMERICANO</h1>

                    <p>Brócolis, mussarela, catupiry, champignon e bacon</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-chester')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-chester')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS BRÓCOLIS-->
            <div class="clearfix"></div>

            <!-- PASTEIS CALABRESA-->
            <div class="list-pasteis-calabresa hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CALABRESA</h1>

                    <p>Calabresa e Mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CALABRESA CATUPIRY</h1>

                    <p>Calabresa, mussarela e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CANADENSE DE CALABRESA</h1>

                    <p>Calabresa, palmito, mussarela, catupiry, parmesão e provolone</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CALABRESA 5 ESTRELAS</h1>

                    <p>Calabresa, lombo de porco assado, mussarela, catupiry, parmesão e provolone</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CALABRESA ACEBOLADA</h1>

                    <p>Calabresa especial, tiras de cebola, mussarela, orégano</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ITALIANO</h1>

                    <p>Salaminho italiano, milho e mussarela</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-calabresa')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-calabresa')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS CALABRESA-->
            <div class="clearfix"></div>

            <!-- PASTEIS CAMARÃO-->
            <div class="list-pasteis-camarao hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CAMARÃO</h1>

                    <p>Camarão e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CAMARÃO CATUPIRY</h1>

                    <p>Camarão, mussarela e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CAMARÃO 4 QUEIJOS</h1>

                    <p>Camarão, mussarela, catupiry, parmesão e provolone</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PRAIANO</h1>

                    <p>Camarão, mussarela, catupiry, ervilha e palmito</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-camarao')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-camarao')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS CAMARÃO-->
            <div class="clearfix"></div>

            <!-- PASTEIS CARNE-->
            <div class="list-pasteis-carne hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>Tradicional</h1>

                    <p>Carne moída, tempero verde, ovo e azeitona</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>GAÚCHO</h1>

                    <p>Carne moída, mussarela, cebola, tempero verde, ovo e azeitona</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG FOME</h1>

                    <p>Carne moída, mussarela, tempero verde, ovo, calabresa, milho e ervilha</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG FOME CATUPIRY</h1>

                    <p>Carne moída, mussarela, tempero verde, ovo, calabresa, milho, azeitona e queijo catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CASEIRO I</h1>

                    <p>Carne moída, mussarela, tempero verde, ovo, provolone e azeitona</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CASEIRO II</h1>

                    <p>Carne moída, mussarela, tempero verde, ovo, tomate, cebola e orégano</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CASEIRO 2000</h1>

                    <p>Carne moída, mussarela, tempero verde, ovo, presunto, palmito, milho e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>STROGONOFF</h1>

                    <p> Carne nobre, creme de leite, champignon, mussarela e batata palha</p>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ISCAS AO SHOYU</h1>

                    <p> Iscas de carne nobre, molho shoyu, mussarela, catupiry, tiras de cebola e um toque de
                        pimentão</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-carne')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-carne-p2')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <div class="list-pasteis-carne-p2 hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ISCAS AO CHEDDAR</h1>

                    <p> Iscas de carne nobre e cheddar</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CASEIRO 2001</h1>

                    <p> Carne moída, mussarela, tempero verde, ovo, provolone, catupiry, tomate e calabresa</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BATALHA</h1>

                    <p> Carne moída, mussarela, champignon, batata palha, tempero verde, ovo e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ROMANO</h1>

                    <p>Carne moída, mussarela, tempero verde, ovo, palmito, champignon, cebola, orégano e azeitona</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-carne')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-carne-p2')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS CARNE-->
            <div class="clearfix"></div>

            <!-- PASTEIS CHESTER-->
            <div class="list-pasteis-chester hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CHESTER</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CHESTER CATUPIRY</h1>

                    <p>Chester fatiado e defumado, catupiry e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG CHESTER</h1>

                    <p>Chester fatiado e defumado, mussarela, milho, calabresa e ervilha</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG CHESTER CATUPIRY</h1>

                    <p>Chester fatiado e defumado, mussarela, milho, calabresa e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CANADENSE DE CHESTER</h1>

                    <p>Chester fatiado e defumado, mussarela, milho, calabresa e catupiry</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-chester')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-chester')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS CHESTER-->
            <div class="clearfix"></div>


            <!-- PASTEIS CORAÇÕES-->
            <div class="list-pasteis-coracao hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CORAÇÃO</h1>

                    <p>Coração e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CORAÇÃO CATUPIRY</h1>

                    <p>Coração, mussarela e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG CORAÇÃO</h1>

                    <p>Coração, mussarela, milho, calabresa e ervilha</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG CORAÇÃO CATUPIRY</h1>

                    <p>Coração, mussarela, milho, calabresa e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CANADENSE DE CORAÇÃO</h1>

                    <p>Coração, palmito, mussarela, catupiry, parmesão e provolone</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-coracao')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-coracao')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS CORAÇÕES-->
            <div class="clearfix"></div>

            <!-- PASTEIS FRANGO-->
            <div class="list-pasteis-frango hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO</h1>

                    <p>Frango e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO CATUPIRY</h1>

                    <p>Frango, mussarela e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG FRANGO</h1>

                    <p>Frango, mussarela, milho, calabresa e ervilha</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG FRANGO CATUPIRY</h1>

                    <p>Frango, mussarela, catupiry, milho e calabresa</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PAULISTA</h1>

                    <p>Frango, mussarela, catupiry, calabresa, azeitona, cebola e orégano</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PAULISTA II</h1>

                    <p>Frango, mussarela, catupiry, presunto, tomate, azeitona e cebola</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>STROGONOFF DE FRANGO</h1>

                    <p>Frango, creme de leite, champignon, mussarela e batata palha</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO DOCE</h1>

                    <p>Frango, mussarela, catupiry e califórnia</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CANADENSE DE FRANGO</h1>

                    <p>Frango, palmito, mussarela, catupiry, parmesão e provolone</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO NAPOLITANO</h1>

                    <p>Frango, chester fatiado e defumado, mussarela, provolone, tomate e orégano</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO AMERICANO</h1>

                    <p> Frango, batata palha, bacon, mussarela e molho da casa</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CASEIRO 2000</h1>

                    <p> Frango, mussarela, presunto, palmito, milho e catupiry</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-frango-p2')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-frango-p2')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <div class="list-pasteis-frango-p2 hide">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO ORIENTAL</h1>

                    <p> Frango, molho shoyu, mussarela, catupiry, tiras de cebola e um toque de pimentão</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO PRIMAVERA</h1>

                    <p>Frango, cenoura, brócolis, molho branco, champignon e mussarela</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-frango')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-frango')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS FRANGO-->
            <div class="clearfix"></div>

            <!-- PASTEIS LOMBO-->
            <div class="list-pasteis-lombo hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>DELICIOSO</h1>

                    <p>Lombo de porco assado, mussarela, milho e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG LOMBO</h1>

                    <p>Lombo de porco assado, mussarela, calabresa, milho e ervilha</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG LOMBO CATUPIRY</h1>

                    <p>Lombo de porco assado, mussarela, catupiry, milho e calabresa</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>TROPICAL</h1>

                    <p>Lombo de porco assado, mussarela, presunto e califórnia</p>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CANADENSE DE LOMBO</h1>

                    <p>Lombo de porco assado, palmito, mussarela, catupiry, parmesão e provolone</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG PIG</h1>

                    <p>Lombo de porco assado, mussarela, bacon, milho e parmesão</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>LOMBO ESPECIAL</h1>

                    <p>Lombo de porco defumado e catupiry</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-lombo')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-lombo')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS LOMBO-->
            <div class="clearfix"></div>

            <!-- PASTEIS PALMITO-->
            <div class="list-pasteis-palmito hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PALMITO</h1>

                    <p>Palmito e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PALMITO CATUPIRY</h1>

                    <p>Palmito, catupiry e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PALMITO 4 QUEIJOS</h1>

                    <p>Palmito, mussarela, catupiry, parmesão e provolone</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PALMIBACON</h1>

                    <p>Palmito, mussarela, milho e bacon</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG PALMITO CATUPIRY</h1>

                    <p>Palmito, mussarela, milho, chester fatiado e defumado, calabresa e catupiry</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-palmito')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-palmito')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS PALMITO-->
            <div class="clearfix"></div>

            <!-- PASTEIS PRESUNTO-->
            <div class="list-pasteis-presunto hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PRESUNTO</h1>

                    <p>Presunto e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PRESUNTO CATUPIRY</h1>

                    <p>Presunto, catupiry e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PORTUGUESA</h1>

                    <p>Presunto, mussarela, milho, calabresa e catupiry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PIZZA</h1>

                    <p>Presunto, mussarela, tomate, orégano e azeitona</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG PRESUNTO CATUPIRY</h1>

                    <p>Presunto, mussarela, milho, calabresa e catupiry</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-presunto')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-presunto')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS PRESUNTO-->
            <div class="clearfix"></div>

            <!-- PASTEIS QUEIJO-->
            <div class="list-pasteis-queijo hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>QUEIJO</h1>

                    <p>Queijo mussarela e orégano</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>4 QUEIJOS</h1>

                    <p>Queijo mussarela, queijo catupiry, queijo parmesão e queijo provolone</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>4 QUEIJO COM TOMATE SECO</h1>

                    <p>Queijos mussarela, catupiry, parmesão, provolone e tomate seco</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>5 QUEIJOS</h1>

                    <p>Queijos mussarela, catupiry, parmesão, provolone e cheddar</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>QUEIJO COM BACON</h1>

                    <p>Queijo mussarela e bacon</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-queijo')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-queijo')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS QUEIJO-->
            <div class="clearfix"></div>

            <!-- PASTEIS LIGHTS-->
            <div class="list-pasteis-lights hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PALMITO</h1>

                    <p>Palmito, cogumelo, presunto magro, requeijão light, queijo mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BRÓCOLIS</h1>

                    <p>Brócolis, queijo mussarela, peito de peru, molho branco, palmito</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO</h1>

                    <p>Frango, tomate com molho c/cebola, requeijão light, uva passa, queijo mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>MAÇA</h1>

                    <p>Maçã, passas de uva, farinha de trigo, talqual, canela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PEITO DE PERU</h1>

                    <p>Peito de peru, molho branco, milho verde, ervilha, cebola cozida sem sal, tomate, queijo
                        mussarela, orégano</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BANANA COM CHOCOLATE</h1>

                    <p>Chocolate e banana</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-lights')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-lights')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS LIGHTS-->
            <div class="clearfix"></div>

            <!-- PASTEIS DOCES-->
            <div class="list-pasteis-doces hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PRESTÍGIO</h1>

                    <p>Chocolate preto e coco</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ROMEU E JULIETA</h1>

                    <p>Goiabada e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>SUPER PH</h1>

                    <p>Banana, canela em pó e melado cremoso</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>SENSAÇÃO</h1>

                    <p>Doce de leite e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>SUPER SENSAÇÃO</h1>

                    <p>Doce de leite com banana</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>SUPER TENTAÇÃO</h1>

                    <p>Doce de leite, chocolate preto e castanhas</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>AMORE MIO</h1>

                    <p>Chocolate preto, castanha e uva passa</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>MANCHA NEGRA</h1>

                    <p>Chocolate preto, banana e doce de leite</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BEIJINHO</h1>

                    <p>Massa de branquinho</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BRIGADEIRO</h1>

                    <p>Massa de brigadeiro com porção de granulado por fora</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CASADINHO</h1>

                    <p>Massa de branquinho e massa de brigadeiro</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BRANCO</h1>

                    <p>Chocolate branco e mussarela</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-doces-p2')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-doces-p2')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <div class="list-pasteis-doces-p2 hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BRANCO E PRETO</h1>

                    <p>Chocolate branco e chocolate preto</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PRETO</h1>

                    <p>Chocolate preto e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>AVELÃ</h1>

                    <p>Creme de Avelã</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FESTERÊ</h1>

                    <p>Doce de leite e bolinhas aeradas</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CALIFÓRNIA</h1>

                    <p>Abacaxi, pêssego, figo e mussarela</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-doces')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-doces')"><img
                            src="images/cardapio-button-right.png" alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS DOCES-->
            <div class="clearfix"></div>
            <div class="list-sanduiches hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ATUM</h1>

                    <p>Pasta de atum, pasta de ricota, tomate, alface, cenoura ralada, maionese e pão integral</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO</h1>

                    <p>Pasta de frango, mussarela, tomate, alface, uva passa, cenoura ralada, maionese e pão branco</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ITALIANO I</h1>

                    <p>Salaminho, mussarela, tomate, alface, margarina, maionese, pepino e pão branco</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ITALIANO II</h1>

                    <p>Salaminho, provolone, tomate seco, rúcula, maionese e pão branco</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO LIGHT (NOVO)</h1>

                    <p>Pasta de frango com ricota, alface, rúcula, cenoura ralada, palmito, azeitona e pão integral</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>LIGHT I</h1>

                    <p>Pasta de ricota, chester fatiado e defumado, tomate seco, alface, cenoura ralada e pão
                        integral</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>LIGHT II</h1>

                    <p>Pasta de ricota temperada (tempero verde, azeitona), cenoura ralada, alface, tomate, palmito e
                        pão integral</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>LOMBO</h1>

                    <p>Lombo defumado, mussarela, tomate, alface, maionese e pão branco</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PEITO DE PERU</h1>

                    <p>Peito de peru, pasta de ricota, cenoura ralada, pepino , alface, maionese e pão integral</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('sanduiches-p2')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('sanduiches-p2')"><img
                            src="images/cardapio-button-right.png" alt="Próxima"></a></div>
            </div>
            <div class="list-sanduiches-p2 hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PRESUNTO</h1>

                    <p>Presunto, mussarela, alface, tomate, azeitona, margarina, maionese e pão branco</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>MORTADELA</h1>

                    <p>Mortadela, mussarela, ovo , tomate, alface, margarina, maionese e pão branco</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>TRADICIONAL</h1>

                    <p>Presunto, mussarela, ovo , tomate, alface, margarina, maionese e pão branco</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>MISTO</h1>

                    <p>Frango desfiado, presunto, tomate, milho, ervilha, catchup, maionese e pão branco </p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('sanduiches')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('sanduiches')"><img
                            src="images/cardapio-button-right.png" alt="Próxima"></a></div>
            </div>
            <div class="clearfix"></div>

            <!--- PORÇÕES EXTRAS -->
            <div class="list-porcoes-extras hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>AZEITONA</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CHAMPIGNON</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BACON</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CHEDDAR</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>OVO</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BATATA PALHA</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PALMITO</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BRÓCILIS</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CORAÇÃO</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PARMESÃO</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PEITO DE PERU</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PEITO DE PERU</h1>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas">
                    <a id="left" onclick="menuList('porcoes-extras-p3')"><img src="images/cardapio-button-left.png"
                                                                              alt="Voltar"></a>
                    <a id="right" onclick="menuList('porcoes-extras-p2')"><img src="images/cardapio-button-right.png"
                                                                               alt="Próxima"></a>
                </div>
            </div>
            <div class="list-porcoes-extras-p2 hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CALABRESA</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>ERVILHA</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PRESUNTO</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CALIFÓRNIA</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>FRANGO</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>PROVOLONE</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CARNE MOÍDA</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>LOMBO</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>TOMATE</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CATUPIRY</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>MILHO</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>TOMATE SECO</h1>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas">
                    <a id="left" onclick="menuList('porcoes-extras')"><img src="images/cardapio-button-left.png"
                                                                           alt="Voltar"></a>
                    <a id="right" onclick="menuList('porcoes-extras-p3')"><img src="images/cardapio-button-right.png"
                                                                               alt="Próxima"></a>
                </div>
            </div>
            <div class="list-porcoes-extras-p3 hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CEBOLA</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>MOLHO BRANCO</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>CENOURA</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>MOLHO DA CASA</h1>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas">
                    <a id="left" onclick="menuList('porcoes-extras-p2')"><img src="images/cardapio-button-left.png"
                                                                              alt="Voltar"></a>
                    <a id="right" onclick="menuList('porcoes-extras')"><img src="images/cardapio-button-right.png"
                                                                            alt="Próxima"></a>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="list-combokids hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>1 PASTEL PEQUENO</h1>

                    <p>Escolha uma opção de sabor: Carne Moída; Frango Catupiry Coração; Queijo com Milho
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>1 SUCO*</h1>

                    <p><i>* suco de caixinha que integra o combo; não pode ser substituído por outro do cardápio.</i>

                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>1 GULOSEIMA</h1>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas">
                    <a id="left" onclick="menuList('combokids')"><img src="images/cardapio-button-left.png"
                                                                      alt="Voltar"></a>
                    <a id="right" onclick="menuList('combokids')"><img src="images/cardapio-button-right.png"
                                                                       alt="Próxima"></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="clearfix"></div>
<footer id="rodape">

    <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animate top">
            <div class="titulo-footer">
                <h3>Delivery</h3>
            </div>
            <ul class="info">
                <li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Ângelo Bolson,468 | Santa Maria,RS
                    <a onClick="showMap('#mapAgBolson')" id="mapa">Ver no mapa</a>
                </li>
                <li><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (55)
                    <div class="telefone">3218 1008</div>
                </li>
                <li><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Segunda a Domingo: 19:00 hs - 00:00 hs</li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animate top">
            <div class="titulo-footer">
                <h3>Express</h3>
            </div>
            <ul class="info">
                <li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Niereraurer, 1575 | Santa Maria,RS
                    <a onClick="showMap('#mapNiere')" id="mapa">Ver no mapa</a>
                </li>
                <li><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (55)
                    <div class="telefone">3217 4037</div>
                </li>
                <li><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Segunda a Domingo: 19:00 hs - 00:00 hs</li>

            </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animate top">
            <div class="titulo-footer">
                <h3>Ângelo Bolson</h3>
            </div>
            <ul class="info">
                <li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Ângelo Bolson,338 | Santa Maria,RS
                    <a onClick="showMap('#mapAgBolson1')" id="mapa">Ver no mapa</a
                    ></li>
                <li><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (55)
                    <div class="telefone">3218 6426</div>
                </li>
                <li><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Segunda a Domingo: 19:00 hs - 00:00 hs</li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animate top">
            <div class="titulo-footer">
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
                <li><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Segunda a Domingo: 19:00 hs - 00 hs</li>

            </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animate top">
            <div class="titulo-footer">
                <h3>São José</h3>
            </div>
            <ul class="info">
                <li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Rua Brasilpinho,49 - Kobrasol
                    <a onClick="showMap('#map')" id="mapa">Ver no mapa</a>
                </li>
                <li><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (48)
                    <div class="telefone">3234 9411</div>
                </li>
                <li><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Segunda a Domingo: 19:00 hs - 00 hs</li>

            </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animate top">
            <div class="titulo-footer pague">
                <h3>Pague Com</h3>
            </div>
            <ul class="info">
                <li>Santa Maria <i class="fa fa-credit-card-alt fa-lg" aria-hidden="true"></i></li>
                <li class="txt-normal">Visa, Mastercard, Hipercard, Banricompras, Ticket Restaurante, Alelo(elo),
                    Redecard, Visa Vale Refeição, Diners, Refeisul.
                </li>
                <li>Santa Catarina <i class="fa fa-credit-card-alt fa-lg" aria-hidden="true"></i></li>
                <li class="txt-normal">Visa e Master</li>
            </ul>
        </div>
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
<style>
</style>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js"></script>
<script async>
    $(document).ready(function () {
        if ($("#banner-principal").length > 0) {
            $("#banner-principal").owlCarousel({
                autoplay: true,
                //autoplayHoverPause: true,
                dots: true,
                nav: false,
                loop: true,
                items: 1,
            });
        }
    });
</script>
<!--CARDÁPIO -->
<script>
    $('.list-one').addClass('show')

    function menuList(menu) {

//    <!-- PASTEIS--!>
        $('.list-pasteis-novos').addClass('hide')
        $('.list-pasteis-novos-p2').addClass('hide')
        $('.list-pasteis-novos-p3').addClass('hide')

        //BRÓCOLIS
        $('.list-pasteis-brocolis').addClass('hide')

        //CALABRESA
        $('.list-pasteis-calabresa').addClass('hide')

        //CAMARÃO
        $('.list-pasteis-camarao').addClass('hide')

        //CARNE
        $('.list-pasteis-carne').addClass('hide')
        $('.list-pasteis-carne-p2').addClass('hide')

        //CHESTER
        $('.list-pasteis-chester').addClass('hide')

        //CORAÇÃO
        $('.list-pasteis-coracao').addClass('hide')

        //FRANGO
        $('.list-pasteis-frango').addClass('hide')
        $('.list-pasteis-frango-p2').addClass('hide')

        //LOMBO
        $('.list-pasteis-lombo').addClass('hide')

        //PALMITO
        $('.list-pasteis-palmito').addClass('hide')

        //PRESUNTO
        $('.list-pasteis-presunto').addClass('hide')
        //QUEIJO
        $('.list-pasteis-queijo').addClass('hide')


//        <!-- PASTEIS LIGHTS --!>
        $('.list-pasteis').addClass('hide')
        $('.list-pasteis-lights').addClass('hide')
        $('.list-pasteis-lights-p2').addClass('hide')



//
        <!-- PASTEIS DOCES-->
        $('.list-pasteis-doces').addClass('hide')
        $('.list-pasteis-doces-p2').addClass('hide')

//
        <!-- SANDUICHES-->
        $('.list-sanduiches').addClass('hide')
        $('.list-sanduiches-p2').addClass('hide')

//
        <!-- PORÇÕES EXTRAS-->
        $('.list-porcoes-extras').addClass('hide')
        $('.list-porcoes-extras-p2').addClass('hide')
        $('.list-porcoes-extras-p3').addClass('hide')

//
        <!-- COMBO KIDS-->
        $('.list-combokids').addClass('hide')
        $('.list-combokids-p2').addClass('hide')


        $('.list-' + menu + '').removeClass('hide')
        console.log('.list-' + menu + '')

        //dropdown
        $('.menu-pasteis-novos').removeClass('seta-ativo')
        $('.menu-pasteis-brocolis').removeClass('seta-ativo')
        $('.menu-pasteis-calabresa').removeClass('seta-ativo')
        $('.menu-pasteis-camarao').removeClass('seta-ativo')
        $('.menu-pasteis-carne').removeClass('seta-ativo')
        $('.menu-pasteis-chester').removeClass('seta-ativo')
        $('.menu-pasteis-coracao').removeClass('seta-ativo')
        $('.menu-pasteis-frango').removeClass('seta-ativo')
        $('.menu-pasteis-lombo').removeClass('seta-ativo')
        $('.menu-pasteis-palmito').removeClass('seta-ativo')
        $('.menu-pasteis-presunto').removeClass('seta-ativo')
        $('.menu-pasteis-queijo').removeClass('seta-ativo')


        $('.menu-pasteis-lights').removeClass('seta-ativo')
        $('.menu-pasteis-doces').removeClass('seta-ativo')
        $('.menu-sanduiches').removeClass('seta-ativo')
        $('.menu-porcoes-extras').removeClass('seta-ativo')
        $('.menu-combokids').removeClass('seta-ativo')
        $('.menu-' + menu + '').addClass('seta-ativo')
    }

</script>
<strong></strong>
</body>
</html>