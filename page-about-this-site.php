<?php get_header();  ?>
<main>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <section class="aboutSiteContent" role="contentinfo" aria-label="section containing information on this website from Gerald Hannon">
       	<h3 class="aboutsiteTitle"><?php the_title(); ?></h3>

          <?php the_content(); ?>
        </section>
        

      <?php endwhile; // end the loop?>


<?php get_footer(); ?>
</main>