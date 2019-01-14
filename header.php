<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <title>
        <?php wp_title("|" , "true", "right"); ?>
        <?php bloginfo( 'name' ); ?>
    </title>

    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.jpg">

    <?php wp_head(); ?>

</head>


<body>



    <header>




        <div class="header_logo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-12 text-center">
                        <a href="<?php echo home_url(); ?>">
                            <img class="img-responsive logo" src="<?php bloginfo( 'template_directory' ); ?>/img/Logo_inter.png" alt="">
                        </a>
                    </div>

                    <div class="col-md-9 col-sm-12">
                        <div class="row">

                            <div class="col-md-9">

                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                                aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>

                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-left">
                                                <li>
                                                    <a href="<?php echo home_url(); ?>">NOSOTROS</a>
                                                    <!--                                     <span class="sr-only">(current)</span> -->
                                                </li>
                                                <li>
                                                    <a href="#" data-scroll-nav="1">Servicios</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-scroll-nav="2">¿POR QUÉ ELEGIRNOS?</a>
                                                </li>

                                                <li>
                                                    <a href="#">COTIZACIÓN</a>
                                                </li>


                                                <li>
                                                    <a href="<?php echo home_url(); ?>/blog">herramientas</a>
                                                </li>

                                                <!-- <li>
                                                    <a href="#" data-scroll-nav="4">Galería</a>
                                                </li> -->

                                                <!-- <li>
                                                    <a href="#" data-scroll-nav="5">Ubicación</a>
                                                </li> -->

                                                <li>
                                                    <a href="#" data-scroll-nav="3">Contacto</a>
                                                </li>
                                            </ul>


                                        </div>
                                        <!-- /.navbar-collapse -->
                                    </div>
                                    <!-- /.container-fluid -->
                                </nav>


                            </div>


                            <div class="col-md-3">
                                <div class="row row_cont">


                                    <div class="col-md-7 col-sm-6 col-xs-6">

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <img style="width: 53px;" src="<?php bloginfo( 'template_directory' ); ?>/img/BAC_header.jpg">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <img style="width: 67px; margin-top:-5px;" src="<?php bloginfo( 'template_directory' ); ?>/img/EA_header.jpg">
                                            </div>
                                        </div>





                                    </div>

                                    <div class="col-md-5 col-sm-6 col-xs-6">
                                        <?php
                                    echo do_shortcode('[tp widget="flags/tpw_flags_css.php"]');
                                    ?>
                                        <!-- <img class="img-responsive flags pull-right" src="<?php //bloginfo( 'template_directory' ); ?>/img/flags.png" alt=""> -->
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </header>