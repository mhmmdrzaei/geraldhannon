<?php get_header();  ?>
<main>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <section class="aboutMeContent">
          <?php the_content(); ?>
        </section>
        

      <?php endwhile; // end the loop?>


<?php get_footer(); ?>
</main>