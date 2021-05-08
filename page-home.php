
<?php get_header();  ?>
<main>
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section class="pageMain">
            <?php if( have_rows('book_preview') ): ?>
          <?php while( have_rows('book_preview') ): the_row(); 
              $image = get_sub_field('book_image');
              

              ?>
              <div class="bookPreview">
                <section class="pageLinkPreview">
                  <a href="<?php the_sub_field('linked_to_page'); ?>">Visit the Books Page for more information.</a>
                </section>
                
                <section class="bookPreviewInner">
                  <figure>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                  </figure>
                    
                    <div class="bookPreviewContent">
                        <?php the_sub_field('text_homeBook'); ?>

                    </div>
                </section>
                
              </div>

          <?php endwhile; ?>
      <?php endif; ?>
      <figure class="imageMain">
         <?php the_post_thumbnail('large'); ?>
      </figure>
      <section class="introText">
        <?php the_content(); ?>
      </section>
      
    </section>

    <?php endwhile; // end the loop?>

<?php get_footer(); ?>
</main>