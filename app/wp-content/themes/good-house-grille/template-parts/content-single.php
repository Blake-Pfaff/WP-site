<article <?php post_class( 'news-article' ); ?>>
    <?php
    if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'full' );
    }
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <time><?php echo get_the_date( 'M. j, Y ' ); ?></time>
    <?php the_content(); ?>
    <div class="postmeta">
        <p>Categories: <?php the_category( $separator = ', ' ); ?> | Tags: <?php the_tags( $before = null, $sep = ', ', $after = '') ?></p>
    </div>
</article>
