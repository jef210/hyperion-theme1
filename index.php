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
        <div class="brand-logos" id="gsl_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/gsl_logo-400x400.png" alt="green smart living"</div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="brand-logos"><img src="<?php bloginfo('template_directory'); ?>/assets/images/jerky_good_clean_small.png" alt="green smart living" id="jerky_good_clean_small"</div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="brand-logos" id="gsl_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/sol_logo.png" alt=""</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="brand-logos" id="gsl_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/horseshoe7631_3x3.jpg" alt=""</div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="brand-logos"><img src="<?php bloginfo('template_directory'); ?>/assets/images/wild-zora-logodark.png" alt="green smart living" id="jerky_good_clean_small"</div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="brand-logos" id="gsl_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/olomomo_logo.png" alt="green smart living"</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="brand-logos" id="gsl_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/rocky_mountain_popcorn.png" alt="green smart living"</div>
        </div>
    </div>
    <div class="col-lg-8" id="brand-text-bottom">
    <h1>Adding more all the time!</h1>
    </div>
</div>



    <?php endwhile;

    else :
        echo '<p>No content found</p>';

    endif;

get_footer();

?>