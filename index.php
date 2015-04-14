<?php

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>

<!-- title of the post -->
<div class="row">
    <div class="col-xs-12 contact-block green-head"<
        <h1<?php the_permalink(); ?>><?php the_title(); ?></h1>
    </div>
</div>

        <!-- content of the post -->
<div class="row">
    <div class="col-xs-12 contact-block bottom-border">
        <?php the_content(); ?>
    </div>    
</div>
<div class="row">
    <div class="col-xs-12">
       <h1 class="brand-header">Our Brands</h1>
    </div>    
</div>


<!-- Brand Images -->
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <a href="http://greensmartliving.com/" target="_blank">
        <div class="brand-logos" id="gsl_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/gsl_logo-400x400.png" alt="green smart living"</div>
        </div></a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <a href="http://www.lonestarwv.com/" target="_blank">
        <div class="brand-logos" id="lone_star_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/jerky_good_clean_small.png" />
        </div></a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <a href="http://snackoutloud.com/" target="_blank">
        <div class="brand-logos" id="snack_out_loud_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/sol_logo.png" alt=""/>
        </div></a>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <a href="http://www.rickysluckynuts.com/" target="_blank">
        <div class="brand-logos" id="rickys_nuts_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/horseshoe7631_3x3.jpg" alt=""/>
        </div></a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <a href="http://www.wildzora.com/" target="_blank">
        <div class="brand-logos" id="wild_zora_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/wild-zora-logodark.png" alt=""/>
        </div></a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <a href="http://olomomo.com/" target="_blank">
        <div class="brand-logos" id="olomomo_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/olomomo_logo.png" alt=""/>
        </div></a>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-lg-4">
    <a href="http://openroadsnacks.com/" target="_blank">
        <div class="brand-logos" id="rocky_mountain_popcorn_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/rocky_mountain_popcorn.png" alt=""/>
        </div></a>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4" id="brand-text-bottom">
    <h1>Adding more all the time!</h1>
    </div>
</div>



    <?php endwhile;

    else :
        echo '<p>No content found</p>';

    endif;

get_footer();

?>