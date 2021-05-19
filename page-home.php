
<?php get_header();  ?>
<main>
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section class="pageMain" role="contentinfo" aria-label="Container for the home page items, a brief welcome message from Gerald Hannon, a Picture of Gerald in a red shirt by a beach as well as a breif description of Memoire">
            <?php if( have_rows('book_preview') ): ?>
          <?php while( have_rows('book_preview') ): the_row(); 
              $image = get_sub_field('book_image');
              

              ?>
              <article class="bookPreview" role="contentinfo" aria-label="Brief information on Gerald Hannon's IMMORAL, INDECENT & SCURRILOUS: MEMOIRS OF AN UNREPENTANT SEX RADICAL">
                <section class="pageLinkPreview" role="contentinfo" aria-label="Link to more detailed Book Page">
                  <a href="<?php the_sub_field('linked_to_page'); ?>">Visit the Books Page for more information.</a>
                </section>
                
                <section class="bookPreviewInner" role="contentinfo" aria-label="Brief text on book title and cover">
                  <figure aria-label="book cover">
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                  </figure>
                    
                    <section class="bookPreviewContent">
                        <?php the_sub_field('text_homeBook'); ?>

                    </section>
                </section>
                
              </article>

          <?php endwhile; ?>
      <?php endif; ?>
      <figure class="imageMain" aria-label="picture of Gerald at a beach in a red shirt with open and welcoming arms, smiling">
         <?php the_post_thumbnail('large'); ?>
      </figure>
      <section class="introText" aria-label="Welcome text from Gerald">
        <?php the_content(); ?>
      </section>
      
    </section>

    <?php endwhile; // end the loop?>

<?php get_footer(); ?>
</main>