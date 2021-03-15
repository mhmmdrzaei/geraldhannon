<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php endwhile; endif; ?>
        <?php $args = array( 'post_type' => 'press', 
                  'order'       => 'DESC',
                    'posts_per_page' => -1 );
          query_posts( $args ); // hijack the main loop
          while ( have_posts() ) : the_post();
            ?>
            <h2><?php the_title(); ?></h2>
            <?php the_field('publication_source_Press'); ?>
            <?php the_field('writer_press'); ?>
            <?php the_field('date_Press'); ?>
            <?php if( have_rows('link_or_file_upload_press') ): ?>
                <?php while( have_rows('link_or_file_upload_press') ): the_row(); 

                    // Get sub field values.
                    $link = get_sub_field('press_link');
                    $upload = get_sub_field('press_upload');

                    ?>
                    <?php if($link) {?>
                    <a href="<?php echo $link ;  ?>">Visit Site</a>
                    <?php } elseif ($upload) { ;?>
                          <a href="<?php echo $upload['url']; ?>">Download PDF</a>

                    <?php }; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php endwhile;?>
<?php wp_reset_query();?> 
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>