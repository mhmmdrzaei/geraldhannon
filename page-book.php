<?php get_header();  ?>
<main>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <section class="pageBookContent">
        <section class="pageBookside">
            <figure>
               <?php the_post_thumbnail('large'); ?> 
            </figure>
            <section class="bookDetails">
                <?php the_field('book_details'); ?>
            </section>
            <?php if( have_rows('reviews') ): ?>
                <section class="reviewsSide">
                <?php while( have_rows('reviews') ): the_row(); ?>
                    <div class="reviewsEach">
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

        </section>
        <section class="pageBookMain">
            <h2><a href="#"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        </section>
        <?php endwhile; endif; ?>
    </section>     
<?php wp_reset_query();?> 

<?php get_footer(); ?>
    
</main>

