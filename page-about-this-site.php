<?php get_header();  ?>
<main>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <section class="aboutSiteContent">
       	<h3 class="aboutsiteTitle"><?php the_title(); ?></h3>

          <?php the_content(); ?>
        </section>
        

      <?php endwhile; // end the loop?>


<?php get_footer(); ?>
</main>