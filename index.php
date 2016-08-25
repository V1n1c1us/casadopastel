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
                    <li class='active'><a href="#">home</a></li>
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
                <ul class="nav navbar animate " id="cardapio-menu">
                    <li class="col-md-2 menu-pasteis menu-pasteis-p2 menu-pasteis-p3 seta-ativo"><a
                            onclick="menuList('pasteis')">Pastéis</a></li>
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
        <div class="row animate bottom" id="cardapio-itens">
            <!-- PASTEIS-->
            <div class="list-pasteis">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-p3')"><img
                            src="images/cardapio-button-left.png" alt="Voltar"></a> <a id="right"
                                                                                       onclick="menuList('pasteis-p2')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <div class="list-pasteis-p2 hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>AINDA NO PASTEL</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>BIG VEGETARIANO I</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis-p3')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <div class="list-pasteis-p3 hide">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="cardapio-box-item">
                    <h1>AINDA NO PASTEL</h1>

                    <p>Chester fatiado e defumado e mussarela</p>
                </div>
                <div class="clearfix"></div>
                <div class="cardapio-setas"><a id="left" onclick="menuList('pasteis-p2')"><img
                            src="images/cardapio-button-left.png"
                            alt="Voltar"></a> <a id="right" onclick="menuList('pasteis')"><img
                            src="images/cardapio-button-right.png"
                            alt="Próxima"></a></div>
            </div>
            <!-- FIM PASTEIS-->

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

//        PASTEIS
        $('.list-pasteis').addClass('hide')
        $('.list-pasteis-p2').addClass('hide')
        $('.list-pasteis-p3').addClass('hide')


//        PASTEIS  LIGHTS
        $('.list-pasteis').addClass('hide')
        $('.list-pasteis-lights').addClass('hide')
        $('.list-pasteis-lights-p2').addClass('hide')


//        <!-- PASTEIS DOCES
        $('.list-pasteis-doces').addClass('hide')
        $('.list-pasteis-doces-p2').addClass('hide')

//        <!-- SANDUICHES-->
        $('.list-sanduiches').addClass('hide')
        $('.list-sanduiches-p2').addClass('hide')

//        <!-- PORÇÕES EXTRAS-->
        $('.list-porcoes-extras').addClass('hide')
        $('.list-porcoes-extras-p2').addClass('hide')
        $('.list-porcoes-extras-p3').addClass('hide')

//        <!-- COMBO KIDS-->
        $('.list-combokids').addClass('hide')
        $('.list-combokids-p2').addClass('hide')


        $('.list-' + menu + '').removeClass('hide')
        console.log('.list-' + menu + '')


        $('.menu-pasteis').removeClass('seta-ativo')
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