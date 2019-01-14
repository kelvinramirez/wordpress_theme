<section class="buscar_section">
<div class="container">
    <?php get_search_form() ?>
</div>
</section>

<footer>
	
	
 <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <!-- <h4 class="modal-title" id="myModalLabel">Cita</h4> -->
                                </div>
                                <div class="modal-body">


                                    <h3 class="title_widget_modal">AGENDAR UNA CITA</h3>
                                    <div class="cont_form">

                                        <?php
                                                
                                                echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]');
                                                
                                                ?>


                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                                </div>
                            </div>
                        </div>
                    </div>
	
	
        <div class="ralla_footer">
            <div class="row">
                <div class="col-md-8 rallita_footer">

                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>

        <div class="footer_inner">

            <div class="container">
                <div class="row">

                    <div class="col-md-6">

                        <img class="img-responsive logo" style="width:310px; margin-left:0px;" src="<?php bloginfo( 'template_directory' ); ?>/img/Logo_inter_white.png" alt="">
                        <p class="parrafo_footer">Somos un Operador Logístico basado en República Dominicana, dedicados al transporte de carga aérea, carga marítima, terrestre cuyo mayor activo lo compone nuestro capital humano y nuestro objetivo principal es ayudar a nuestros clientes a tener una cadena de suministro cada vez más competitiva, efectiva y puntual.</p>
                    </div>

                    <div class="col-md-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#" data-scroll-nav="1">SERVICIOS</a></li>
                        <li class="list-group-item"><a href="#" data-scroll-nav="2">¿POR QUÉ ELEGIRNOS?</a></li>
                        <li class="list-group-item">    <a href="<?php echo home_url(); ?>/blog">BLOG</a></li>
                        <li class="list-group-item">     <a href="#" data-scroll-nav="4">GALERÍA</a></li>
                        <li class="list-group-item"><a href="#" data-scroll-nav="5">UBICACIÓN</a></li>
                        <li class="list-group-item"> <a href="#" data-scroll-nav="3">CONTACTO</a></li>
                        </ul>

                        












                    </div>

                    <div class="col-md-3">

                        <h3 class="title_widget_contact_footer">NUESTRAS OFICINAS</h3>

                        <ul class="lista_widget_contact_footer">
                            <li>Ave. México 99 El Vergel
                                <br> Santo Domingo, Rep. Dom.</li>
                            <li>Teléfono:
                                <br> <a href="tel:8095652171">(809) 565-2171</a>
                            </li>
                            <li>Email:
                                <br>  <a href="mailto:info@intertransdr.com">info@intertransdr.com</a> 
                            </li>
                        </ul>

                       <button class="button_cont_widget m_top_23 hvr-back-pulse" data-toggle="modal" data-target="#myModal">Agenda una cita</button>

                         <h3 class="title_widget_contact_footer">SÍGUENOS</h3>

<a href="#">
                         <i class="fab fa-facebook-square redes_icon"></i>
                         </a>
<a href="#">
                         <i class="fab fa-instagram redes_icon"></i>
</a>

<a href="#">
<i class="fab fa-twitter redes_icon"></i>
</a>

<a href="#">
<i class="fab fa-linkedin redes_icon"></i>
</a>



                    </div>

                </div>

            </div>

        </div>


   
</footer>






<?php wp_footer(); ?>


<script>
    
        jQuery(function ($) {
            $.scrollIt();
            new WOW().init();
        });
	
	jQuery(function() {
    // jQuery('.box').matchHeight();
});

        jQuery(document).ready(function () {
  var trigger = jQuery('.hamburger'),
      overlay = jQuery('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  jQuery('[data-toggle="offcanvas"]').click(function () {
        jQuery('#wrapper').toggleClass('toggled');
  });  
});
   
</script>




</body>

</html>