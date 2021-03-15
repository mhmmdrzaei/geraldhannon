<?php get_header();  ?>

      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php endwhile; endif; ?>
        <?php $args = array( 'post_type' => 'photo', 
                  'order'       => 'DESC',
                    'posts_per_page' => -1 );
          query_posts( $args ); // hijack the main loop
          while ( have_posts() ) : the_post();
            ?>
            <a href="<?php the_permalink(); ?>">


              <?php the_title(); ?>
              <?php the_field('photo_year'); ?>
              </a>
            
        <?php endwhile;?>
<?php wp_reset_query();?> 

<?php get_footer(); ?>