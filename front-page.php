<?php get_header();

$args = array(
 
    'post_type' => 'servicio',
    // 'posts_per_page' => 2,
    'orderby' => 'post_date'
    );
  $loop_servicios = new WP_Query( $args );


?>
<section class="slider">
    <?php echo do_shortcode( '[rev_slider alias="mask-showcase-test"]' ); ?>

</section>
<a name="servicios"></a>
<section class="servicios" data-scroll-index="1">

    <div class="container">

        <div class="row cont_servicios">

            <!-- Start the Loop. -->
            <?php if ( $loop_servicios->have_posts() ) : while ( $loop_servicios->have_posts() ) : $loop_servicios->the_post(); ?>





            <div class="col-md-4 col-sm-6 wow fadeInUp box">
                  <a href="<?php the_permalink(); ?>">
<div class="cont_card_main">






                <figure class="center">
                    <?php 
            
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('thumb-medium', array('class' => 'img-responsive img_center' ));
            } 
                      ?>
                    <!-- <img src="<?php //bloginfo( 'template_directory' ); ?>/img/maritima.jpg" class="img-responsive" alt=""> -->
                    <div class="inf_servicios">
                        <p>
                            <?php echo get_the_excerpt() ?>
                        </p>
                        
                    </div>

                </figure>

                <h3 class="title_servicios">
                  
						
                        <?php the_title(); ?>
                 
                </h3>

               



                <a href="<?php the_permalink(); ?>" class="url_servicios">Ver más >*</a>

</div>
            </div>

</a>










            <?php endwhile; else : ?>


            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p>
                <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
            </p>


            <!-- REALLY stop The Loop. -->
            <?php endif; ?>











        </div>





    </div>




</section>

<section class="banner">

    
   
    <img src="http://ibsdnorte.org.do/intertrans/wp-content/uploads/2018/11/Banner-Assekuransa.png" style="width:100%;" alt="">
    
     <h3 class="ctc_inter" data-toggle="modal" data-target=".bs-example-modal">CONTRATAR TU SEGURO ES TAN SIMPLE COMO HACER UN CLIC AQUÍ</h3>   
 

    
   

<div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="container-fluid">
        <?php echo do_shortcode(' [contact-form-7 id="205" title="assekuransa"]') ?>
    </div>

    
   


    </div>
  </div>
</div>


</section>


<a name="elegirnos"></a>
<section class="elegirnos" data-scroll-index="2">

    <!-- <p class="script"><span>The Real</span></p> -->
    <h2 class="title_elegirnos script">
        <span>¿POR QUÉ ELEGIRNOS?</span>
    </h2>






    <div class="container">

        <div class="row">
            <div class="col-md-4 wow fadeInUp elegir_cuadro">
                <div class="cont_elegirnos">
                    <p>
                        Más de 35 años de servicio ininterrumpidos.
                    </p>
                    <i class="fas fa-trophy float-right icon_elegirnos" style="float: right;
                    font-size: 25px;"></i>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp elegir_cuadro">
                <div class="cont_elegirnos">
                    <p>
                        Contamos con un equipo de profesionales altamente capacitados para ofrecerles el mejor de los servicios.
                    </p>
                    <img class="icon_img_" src="<?php bloginfo( 'template_directory' ); ?>/img/helmet_icon.png" alt="">
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp elegir_cuadro">
                <div class="cont_elegirnos">
                    <p>
                        Somos asociados estratégicos y comerciales de las principales empresas nacionales e internacionales de logística de carga,
                        línea marítimas y aéreas.
                    </p>
                    <img class="icon_img_" src="<?php bloginfo( 'template_directory' ); ?>/img/hands.png" alt="">
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp elegir_cuadro">
                <div class="cont_elegirnos">
                    <p>
                        Contamos con nuestra propia oficina en USA y una red de agentes en más de 150 países.
                    </p>
                    <img class="icon_img_" src="<?php bloginfo( 'template_directory' ); ?>/img/office.png" alt="">
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp elegir_cuadro">
                <div class="cont_elegirnos">
                    <p>
                    Somos una empresa certificada: OEA y BASC. Pertenecemos a: ADACEM y ADAA. Somos miembros de FIATA, IATA y del FFN (Freight Forwarder Network).
                    </p>
                    <img class="icon_img_" src="<?php bloginfo( 'template_directory' ); ?>/img/people.png" alt="">
                </div>
            </div>

            


            <div class="col-md-4 wow fadeInUp elegir_cuadro">
                <div class="cont_elegirnos">
                    <p>
                        Ofrecemos monitoreo continuo e información de la condición de su carga en todo momento.
                    </p>
                    <img class="icon_img_" src="<?php bloginfo( 'template_directory' ); ?>/img/location.png" alt="">
                </div>
            </div>
        </div>
<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">

    <h3 class="text-center title_solicita"><i class="fas fa-file-invoice-dollar"></i> SOLICITA UNA COTIZACION DE NUESTROS SERVICIOS</h3>

</a>


<!-- Large modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
     
<div class="container-fluid">
        <?php echo do_shortcode(' [contact-form-7 id="205" title="assekuransa"]') ?>
    </div>

   

    </div>
  </div>
</div>


    </div>

    

</section>

<section class="info_extra">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="cont_title_info_extra">
                    <figure>
                        <img src="http://ibsdnorte.org.do/intertrans/wp-content/uploads/2018/11/especificaciones_aereas-1.jpg" class="img-responsive " alt="">
                    </figure>
<a href="<?php echo home_url(); ?>/especificaciones-aereas">
					 <h4>Especificaciones Aéreas</h4>
					</a>
                   
                </div>
            </div>

            <div class="col-md-4">

                <div class="cont_title_info_extra">
                    <figure>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/especificaciones_contenedores.jpg" class="img-responsive" alt="">
                    </figure>
<a href="<?php echo home_url(); ?>/especificaciones-para-contenedores">
                    <h4>Especificaciones para contenedores
						</a>
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cont_lista_lista">
                    <ul class="lista_info_xtra">
                        <li>
							<a href="<?php echo home_url(); ?>/como-determinar-la-densidad">
							Cómo determinar la densidad
								</a>
                        </li>
                        <li>
							
							<a href="<?php echo home_url(); ?>/terminos-basicos">
							INCOTERMS
								</a>
                           
                        </li>
                        <li>
                            
							<a href="<?php echo home_url(); ?>/enlaces-utiles">
							 Enlaces útiles
								</a>
                        </li>
                        <li style="border-bottom:none;">
                            
							<a href="<?php echo home_url(); ?>/datos-de-republica-dominicana">
							 Datos de República Dominicana
								</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>

</section>

<section class="filosofia">

    <h1 class="text-center title_filosofia">NUESTRA FILOSOFÍA</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Visión</h4>
                <p>
                    Ser la empresa líder en servicios para el mercado de Republica Dominicana de transporte internacional de carga área y marítima, proporcionando las más eficientes soluciones de transporte y manejo de carga, a través de una plataforma segura, moderna y confiable que aporte bienestar y provecho a nuestros y empleados, clientes y proveedores.
                </p>
            </div>

            <div class="col-md-4">
                <h4>Misión</h4>
                <p>
                    Satisfacer las necesidades y requerimientos de nuestros clientes y asociados, ofreciendo las mejores soluciones logísticas para el transporte y manejo de su mercancía, garantizándoles calidad en nuestros servicios operando con estrictos sistemas de seguridad y puntualidad en las entregas y despachos a nuestros clientes.
                </p>
            </div>

            <div class="col-md-4">
                <h4>Valores</h4>
                <p class="text-center">
                    Integridad, Puntualidad, Calidad, Innovación y Eficiencia.
                    <br> Integridad = Lo que somos
                    <br> Puntualidad = Como lo hacemos
                    <br> Calidad= Como lo hacemos
                    <br> Innovación= Con que lo hacemos
                    <br> Eficiencia= Que logramos
                </p>
            </div>
        </div>
    </div>

</section>

<section class="historia" data-scroll-index="3">

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                 


                <h1 class="histotia_title">HISTORIA</h1>

                <p class="parrafo_historia">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="col-md-6">

                <div class="cont_contactos">

                    <figure>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/nuestras_oficinas.jpg" class="img-responsive" alt="">
                    </figure>

                    <h3 class="title_widget_contact">NUESTRAS OFICINAS</h3>

                    <ul class="lista_widget_contact">
                        <li>Ave. México 99 El Vergel
                            <br> Santo Domingo, Rep. Dom.</li>
                        <li>Teléfono:
                            <br> <b><a href="tel:8095652171">(809) 565-2171</a></b>
                        </li>
                        <li>Email:
                            <br> <b> <a href="mailto:info@intertransdr.com">info@intertransdr.com</a> </b>
                        </li>
                    </ul>

                    <button class="button_cont_widget m_top_23 hvr-back-pulse" data-toggle="modal" data-target="#myModal">Agenda una cita</button>





                   



                    <h3 class="title_widget_contact m_top_23">OFICINAS EN USA</h3>

                    <ul class="lista_widget_contact">
                        <li>INTRANS CONSOLIDATORS INC.</li>
                        <li>1598 NW 82 Avenue
                            <br> Doral Florida 33126, USA</li>
                        <li>Teléfono: (305) 470-1446
                        </li>
                        <li>Email:
                            <br>  <a href="mailto:intrans2@intransconsolidators.com">intrans2@intransconsolidators.com</a> 
                            <br>  <a href="mailto:intrans1@intransconsolidators.com">intrans1@intransconsolidators.com</a> 
							
							
							
                        </li>
                    </ul>

                    <h3 class="title_widget_contact m_top_23">ALMACÉN REP. DOM.</h3>

                    <ul class="lista_widget_contact">
                        <li>Ave. Pedro Livio Cedeño N° 148,
                            <br> Santo Domingo D.N.</li>

                        <li>Teléfono:
                            <br> <b><a href="tel:809-544-2888">(809-544-2888)</a></b>
							
                        </li>
                    </ul>



                </div>

            </div>
        </div>



    </div>
</section>



<a name="ubicacion"></a>
<section class="google_maps" data-scroll-index="5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15137.15488555439!2d-69.9187953!3d18.4705767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1dcf25245c976eeb!2sInternacional+De+Transporte+(INTERTRANS)!5e0!3m2!1ses!2sdo!4v1541776063992" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<section class="partnerds">

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h3 class="title_partners">Somos
                    <br> Miembros de </h3>
            </div>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 text-center"><img src="http://ibsdnorte.org.do/intertrans/wp-content/uploads/2018/11/ada_logo.jpg" class="img-responsive img_partners" alt=""></div>
                            <div class="col-md-3 col-sm-4 text-center"><img src="<?php bloginfo( 'template_directory' ); ?>/img/partners/ADACAM.jpg" class="img-responsive img_partners" alt=""></div>
                            <div class="col-md-3 col-sm-4 text-center"><img src="<?php bloginfo( 'template_directory' ); ?>/img/partners/IATA.jpg" class="img-responsive img_partners" alt=""></div>
                            <div class="col-md-3 col-sm-4 text-center"><img src="<?php bloginfo( 'template_directory' ); ?>/img/partners/FIATA.jpg" class="img-responsive img_partners" alt=""></div>
                        </div>

                    </div>
                    <div class="col-md-6">
                    <div class="row">
                            <div class="col-md-3 col-sm-4 text-center"><img src="<?php bloginfo( 'template_directory' ); ?>/img/partners/FFN.jpg" class="img-responsive img_partners" alt=""></div>
                            <div class="col-md-3 col-sm-4 text-center"><img src="<?php bloginfo( 'template_directory' ); ?>/img/partners/ASSEKURANSA.jpg" class="img-responsive img_partners" alt=""></div>
                            <div class="col-md-3 col-sm-4 text-center"><img src="<?php bloginfo( 'template_directory' ); ?>/img/partners/BAC.jpg" class="img-responsive img_partners" alt=""></div>
                            <div class="col-md-3 col-sm-4 text-center"><img src="<?php bloginfo( 'template_directory' ); ?>/img/partners/EA.jpg" class="img-responsive img_partners" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<?php get_footer() ?>