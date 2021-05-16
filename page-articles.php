<?php get_header();  ?>
<main>
  <section class="articleMain">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <section class="articlesText">
    <h3 class="articlesTitle"><?php the_title(); ?></h3>
    <?php the_content(); ?>
  </section>
  <section class="articleSearch">
    <section class="searchSettings">
      <?php echo do_shortcode("[wd_asp elements='search,settings' ratio='100%,100%' id=1]"); ?>
    </section>
    <section class="searchresults">
      <?php echo do_shortcode("[wd_asp elements='results' ratio='100%' id=1]"); ?>
    </section>
    
  </section>
</section>
   <?php endwhile; // end the loop?>
   <?php get_footer(); ?>
</main>

