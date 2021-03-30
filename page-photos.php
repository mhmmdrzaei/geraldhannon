<?php get_header();  ?>

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php 
        $images = get_field('photo_carousel');
        if( $images ): ?>
            <ul>
                <?php foreach( $images as $image ): ?>
                    <li>
                        <a class="photosBox" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                             <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_html($image['caption']); ?>" />
                        </a>
                        <p><?php echo esc_html($image['caption']); ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

      <?php endwhile; // end the loop?>
<?php wp_reset_query();?> 

<?php get_footer(); ?>