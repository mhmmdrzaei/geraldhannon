<?php get_header();  ?>
<main>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <article class="photosMain" role="contentinfo" aria-label="container with a brief text about the photographs and a selection of Geralds personal photos">
        <section class="photosText" role="contentinfo" aria-label="Some words describing Geralds photo practice">
        <h3 class="photosTitle"><?php the_title(); ?></h3>
           <?php the_content(); ?> 
        </section>
        <?php 
        $images = get_field('photo_carousel');
        if( $images ): ?>
            <ul class="photosContent" role="contentinfo" aria-label="Container with photos taken from Geralds Archives">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <a class="photosBox" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                            <figure class="photoEach">
                               <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_html($image['caption']); ?>" /> 
                            </figure>
                            <p><?php echo esc_html($image['caption']); ?></p> 
                        </a>
                        
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </article>
        


      <?php endwhile; // end the loop?>
    <?php wp_reset_query();?> 

    <?php get_footer(); ?>
    
</main>

