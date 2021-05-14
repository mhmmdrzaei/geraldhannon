<?php get_header();  ?>
<main>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section class="photosMain">
        <section class="photosText">
           <?php the_content(); ?> 
        </section>
        <?php 
        $images = get_field('photo_carousel');
        if( $images ): ?>
            <ul class="photosContent">
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

    </section>
        


      <?php endwhile; // end the loop?>
    <?php wp_reset_query();?> 

    <?php get_footer(); ?>
    
</main>

