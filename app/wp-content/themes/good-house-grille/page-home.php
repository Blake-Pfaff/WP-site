<?php
/**
  *Template Name: Home
*/

get_header();?>

    <div class="top-grids">
        <div class="wrap">
            <div class="top-grid">
                <a href="#"><img src="images/icon1.png" title="icon-name"></a>
                <h3>Sucess Story</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <a class="button" href="about.html">Read More</a>
            </div>
            <div class="top-grid">
                <a href="#"><img src="images/icon2.png" title="icon-name"></a>
                <h3>Our Menu</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                <a class="button" href="menu.html">Read More</a>
            </div>
            <div class="top-grid last-topgrid">
                <a href="#"><img src="images/icon3.png" title="icon-name"></a>
                <h3>Location</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <a class="button" href="contact.html">Read More</a>
            </div>
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
