<?php get_header(); ?>

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="title">
          <?php the_title(); ?>
        </div>
        <div class="JournalSource">
          <?php the_field('journal_source'); ?>
        </div>
        <div class="shortDescription">
          <?php the_field('short_description'); ?>
        </div>
        <?php if( have_rows('date') ): ?>
            <?php while( have_rows('date') ): the_row(); ?>
                <p id="date">
                  <?php the_sub_field('date_month'); ?>, <?php the_sub_field('date_year'); ?>
                </p>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if( have_rows('file_upload_or_direct_link') ): ?>
            <?php while( have_rows('file_upload_or_direct_link') ): the_row(); 
               $file = get_sub_field('file_upload');
               $url = get_sub_field('file_link');
              if( $file ): ?>
              <a class="articleFileDownload" href="<?php echo $file['url']; ?>">Download PDF</a>
            <?php endif; ?>
              <?php if ($url):; ?>
                <a href="<?php echo $url; ?>" class="outwardLinkArticle" target="_blank">Follow Link to Access document</a>
              <?php endif; ?>
             <?php endwhile; ?>
        <?php endif; ?>
        <?php 
          $upload = get_field('file_upload_again');
          $linkAgain = get_field('file_url_again');
          if ($upload): ?>
            <a href="<?php echo $upload ?>" target="_blank">Download PDF</a>
          <?php endif; ?>
          <?php if ($linkAgain): ;?>
            <a href="<?php echo $linkAgain; ?>" target="_blank">Visit Link</a>
          <?php endif; ?>
      <?php $tags = get_the_tags();
        if ($tags) {
        foreach( $tags as $tag ) { ;?>
          <div class="tagEach">
            <?php echo $tag->name; ?>
          </div>
        <?php } }; ?>

      <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>