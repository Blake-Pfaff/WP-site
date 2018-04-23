
<article <?php post_class( 'news-article' ) ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <time><?php echo get_the_date( 'M. j, Y ' ); ?></time>
    <p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read More</a></p>
</article>
