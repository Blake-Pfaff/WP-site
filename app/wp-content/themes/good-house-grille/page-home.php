<?php
/**
  *Template Name: Home
*/

get_header();

    $home_boxes = get_post_meta(get_the_ID(), 'grille_home_box', true);

?>


    <div class="top-grids">
        <div class="wrap">
            <?php
                $icon_id = 1;
                $last_class = '';
                foreach( $home_boxes as $box => $info ) :
                    if( 3 == $icon_id) {
                        $last_class = 'last-topgrid';
                    }
                ?>
            <div class="top-grid <?php echo $last_class ?>">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon<?php echo $icon_id; ?>.png" title="icon-name"></a>
                <h3><?php echo $info['title']; ?></h3>
                <p><?php echo $info['content']; ?></p>
                <a class="button" href="<?php $info['url']; ?>">Read More</a>
            </div>
             <?php $icon_id = $icon_id + 1 ?>
        <?php endforeach; ?>
            <div class="clear"> </div>
        </div>
    </div>
    <div class="mid-grid" >
     <div class="warp">
        <?php
            if ( have_posts() ) {
                while (have_posts() ) {
                the_post();
                get_template_part( 'template-parts/home', 'content' );
                } //end while
            } //end if
        ?>
    </div>
 </div>

<div class="bottom-grids">
    <div class="wrap">
    <?php dynamic_sidebar( 'home-bottom' ); ?>
    <div class="clear"> </div>
    </div>
<div class="clear"> </div>
 <!--end-wrap--->
  </div>
     </div>
<?php
get_footer();
