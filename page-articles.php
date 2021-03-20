<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php echo do_shortcode("[wd_asp elements='search,settings' ratio='100%,100%' id=1]"); ?>
      <?php echo do_shortcode("[wd_asp elements='results' ratio='100%' id=1]"); ?>
      
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>