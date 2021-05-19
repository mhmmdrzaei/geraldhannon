<?php get_header();  ?>
<main>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <section class="pageBookContent" role="contentinfo" aria-label="container holding information about the book, links on where to purchase the book, reviews of the book as well as other information. ">
        <section class="pageBookside" role="contentinfo" aria-label="Container with book details">
            <h3 class="bookTitleMobile" aria-label="book title"><a href="#"><?php the_title(); ?></a></h3>
            <figure aria-label="book Cover for Gerald Hannon's memoirs IMMORAL, INDECENT & SCURRILOUS: MEMOIRS OF AN UNREPENTANT SEX RADICAL">
               <?php the_post_thumbnail('large'); ?> 
            </figure>
            <section class="bookDetails" role="contentinfo" aria-label="Book technical details section">
                <?php the_field('book_details'); ?>
            </section>
            <?php if( have_rows('reviews') ): ?>
                <section class="reviewsSide" role="contentinfo" aria-label="Reviews of the book seperated from one another">
                <?php while( have_rows('reviews') ): the_row(); ?>
                    <div class="reviewsEach">
                      <?php the_sub_field('review_each'); ?>
                    </div>
                <?php endwhile; ?>
                </section>
            <?php endif; ?>
            <?php if( have_rows('book_links') ): ?>
                <ul class="salesLinks" role="contentinfo" aria-label="Links to purchase the book from different locations on the web">
                <?php while( have_rows('book_links') ): the_row(); ?>
                  <li><a href="<?php the_sub_field('link_address_book') ;?>"><?php the_sub_field('link_label_book'); ?></a></li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </section>
        <section class="pageBookMain" role="contentinfo" aria-label="a brief description of Gerald Hannon's memoirs IMMORAL, INDECENT & SCURRILOUS: MEMOIRS OF AN UNREPENTANT SEX RADICAL">
            <h2><a href="#"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        </section>
        <?php endwhile; endif; ?>
    </section>     
<?php wp_reset_query();?> 

<?php get_footer(); ?>
    
</main>

