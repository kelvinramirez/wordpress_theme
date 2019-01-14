<?php get_header('paginas') ?>

<div class="header_pages">

    <h1 class="text-center title_pages">BLOG</h1>

</div>

<div class="container cont_blog">

    <div class="row">

        <div class="col-md-8">

            <div class="row">

                <!-- Start the Loop. -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



                <div class="col-md-6 col-sm-6 wow fadeInUp box card_post">
                    <figure>
                        <?php 
            
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail('thumb-medium', array('class' => 'img-responsive img_center' ));
                        } 
                      ?>
                        <!-- <img src="<?php //bloginfo( 'template_directory' ); ?>/img/maritima.jpg" class="img-responsive" alt=""> -->
                    </figure>
                    <h3 class="title_servicios_ingle">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <p>
                        <?php the_time('F jS, Y'); ?>
                    </p>
                    <p class="parrafo_servicios" style="padding: 0 0px;">
                        <?php 
						echo get_the_excerpt();
						?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="url_servicios">Ver más ></a>
                </div>








                <?php endwhile; ?>
                <!-- End of the main loop -->

                <!-- Add the pagination functions here. -->

                <div class="nav-previous alignleft">
                    <?php previous_posts_link( 'Older posts' ); ?>
                </div>
                <div class="nav-next alignright">
                    <?php next_posts_link( 'Newer posts' ); ?>
                </div>

                <?php else : ?>
                <p>
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                </p>
                <?php endif; ?>





            </div>

        </div>

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>




</div>

<?php get_footer() ?>