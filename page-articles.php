<?php get_header();  ?>
<main>
  <section class="articleMain" role="contentinfo" aria-label="section containing text about Gerald Hannons article directory as well as search functionality for the Article directories">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <section class="articlesText">
    <h3 class="articlesTitle"><?php the_title(); ?></h3>
    <?php the_content(); ?>
  </section>
  <section class="articleSearch" role="contentinfo" aria-label="section containing search bar and advanced search parameters. All articles will open as PDF files in a new tab">
    <section class="searchSettings" role="contentinfo" aria-label="container holding the search functionality">
      <?php echo do_shortcode("[wd_asp elements='search,settings' ratio='100%,100%' id=2]"); ?>

    </section>
    <section class="searchresults" role="contentinfo" aria-label="container where search results will auto populate">
      <?php echo do_shortcode("[wd_asp elements='results' ratio='100%' id=2]"); ?>
    </section>
    
  </section>
</section>
   <?php endwhile; // end the loop?>
   <?php get_footer(); ?>
</main>

