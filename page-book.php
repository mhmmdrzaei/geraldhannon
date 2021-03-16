<?php get_header();  ?>

      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_post_thumbnail(); ?>
        <?php the_field('book_details'); ?>
        <?php if( have_rows('reviews') ): ?>
            <section class="reviewsSide">
            <?php while( have_rows('reviews') ): the_row(); ?>
                <div>
                  <?php the_sub_field('review_each'); ?>
                </div>
            <?php endwhile; ?>
            </section>
        <?php endif; ?>
        <?php if( have_rows('book_links') ): ?>
            <ul class="salesLinks">
            <?php while( have_rows('book_links') ): the_row(); ?>
              <li><a href="<?php the_sub_field('link_address_book') ;?>"><?php the_sub_field('link_label_book'); ?></a></li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>


        <?php the_content(); ?>
      <?php endwhile; endif; ?>
<?php wp_reset_query();?> 

<?php get_footer(); ?>