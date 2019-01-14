<?php get_header('paginas') ?>

<div class="header_pages">

<h1 class="text-center title_pages"><?php the_title(); ?>**</h1>

</div>

<div class="container">

     <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php the_content(); ?>



<?php endwhile; else : ?>


<!-- The very first "if" tested to see if there were any Posts to -->
<!-- display.  This "else" part tells what do if there weren't any. -->
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


<!-- REALLY stop The Loop. -->
<?php endif; ?>






</div>

<?php get_footer() ?>