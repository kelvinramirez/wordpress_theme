<?php get_header('paginas')


/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

 ?>

<div class="header_pages">

<h1 class="text-center title_pages"><?php the_title(); ?></h1>

</div>

<section class="maps">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15137.15488555439!2d-69.9187953!3d18.4705767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1dcf25245c976eeb!2sInternacional+De+Transporte+(INTERTRANS)!5e0!3m2!1ses!2sdo!4v1541776063992" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

</section>

<div class="container">

    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>


<h2 class="text-center">Escríbenos</h2>

<div class="cont_form">

<?php

echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]');

?>


</div>

</div>

<?php get_footer() ?>