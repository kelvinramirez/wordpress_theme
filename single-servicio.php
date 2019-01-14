<?php get_header('paginas') ?>

<div class="header_pages">

<h1 class="text-center title_pages">
    <?php the_title(); ?>
</h1>

</div>


<div class="container cont_blog">


<div class="row">

    <div class="col-md-12">

        <div class="row">

            <!-- Start the Loop. -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="col-md-6 col-sm-6 wow fadeInUp">
				  <figure>
                    <?php 

        if ( has_post_thumbnail() ) {
        the_post_thumbnail('thumb-medium', array('class' => 'img-responsive img_center' ));
        } 
      ?>
                    <!-- <img src="<?php //bloginfo( 'template_directory' ); ?>/img/maritima.jpg" class="img-responsive" alt=""> -->
                </figure>
			</div>
			

            <div class="col-md-6 col-sm-6 wow fadeInUp">
              
                <h3 class="title_servicios_ingle">
                    <?php the_title(); ?>
                </h3>
<!--                 <p>
                    //<?php //the_time('F jS, Y'); ?>
                </p> -->
                <p class="parrafo_servicios">
                    <?php the_content(); ?>
                </p>

            </div>





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



</div>




</div>




<?php get_footer() ?>