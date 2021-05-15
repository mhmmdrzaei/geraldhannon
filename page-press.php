<?php get_header();  ?>
<main>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php endwhile; endif; ?>
  <section class="pressMain">
      <?php $args = array( 'post_type' => 'press', 
                'order'       => 'DESC',
                  'posts_per_page' => -1 );
        query_posts( $args ); // hijack the main loop
        while ( have_posts() ) : the_post();
          ?>
          <section class="pressEach">
            <?php if( have_rows('link_or_file_upload_press') ): ?>
                <?php while( have_rows('link_or_file_upload_press') ): the_row(); 

                    // Get sub field values.
                    $link = get_sub_field('press_link');
                    $upload = get_sub_field('press_upload');

                    ?>
                    <?php if($link) {?>
                    <a href="<?php echo $link ;  ?>" target="_blank"><?php the_title(); ?> <img class="linkImg" src="<?php bloginfo('template_directory'); ?>/images/link.png"></a>
                    <?php } elseif ($upload) { ;?>
                    <a href="<?php echo $upload['url']; ?>"target="_blank"><?php the_title(); ?> <img class="pdfImg" src="<?php bloginfo('template_directory'); ?>/images/pdficon.png"></a>

                    <?php }; ?>
                    <p><?php the_field('publication_source_Press'); ?>, <?php the_field('writer_press'); ?>, <?php the_field('date_Press'); ?></p>

          </section>
              <?php endwhile; ?>
          <?php endif; ?>
    
  </section>
    <?php endwhile;?>
    <?php wp_reset_query();?> 
  <?php get_footer(); ?>
</main>