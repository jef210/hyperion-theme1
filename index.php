<?php

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>

<!-- title of the post -->
<div class="container bottom-border">
<div class="row">
    <div class="col-xs-12" id="top-full-image">
        <div class="top-text-box col-sm-12 col-md-12 col-lg-12">
        <div id="top-logo"><img src="/wordpress/wp-content/themes/hyperion_theme1/assets/images/hyperion-logo.svg"/></div>
        <div id="hyperion-blurb">
            <p><strong>HYPERION WHOLESALE </strong>is privileged to be a full service DSD and Wholesale distributor in the Front Range of Colorado.  We pride ourselves in our top-notch customer service, our product guarantees, and the product brands we represent.</p>
<div class="btn-group">
  <button class="btn btn-default btn-lg dropdown-toggle btn1" type="button" data-toggle="dropdown" aria-expanded="false">
  <h1>Contact</h1> 
  </button>
  <ul class="dropdown-menu contact" role="menu">
    <li><h3>Email:</h3></li>
    <li><h3><a href="mailto:jhunter@hyperionwholesale.com">jhunter@hyperionwholesale.com</a></h3></li>
    <li><h3>Phone:</h3></li>
    <li><h3>(303)736-9049</h3></li>
  </ul>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container black-back">
<div class="row" id="brand-header">
<h1>Our Brands</h1>
</div>
</div>


<div class="container black-back">
<div class="row">
                         
 

 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
   <button type="button" class="btn btn-default brand-box brand-logo" id="lone-star-logo" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
   </button>
   </div> 

   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <button type="button" class="btn btn-default brand-box brand-logo" id="sw-jerky-logo" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
     </button>
     </div> 

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <button type="button" class="btn btn-default brand-box brand-logo" id="solf-logo" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
     </button>
       
     </div>

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <button type="button" class="btn btn-default brand-box brand-logo" id="buffalo-bills-logo" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
     </button>
       
     </div>

</div>
</div>


<div class="container black-back">
<div class="row">
                         
 

  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <button type="button" class="btn btn-default brand-box brand-logo" id="olomomo-logo" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
     </button>
       
     </div> 

  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <button type="button" class="btn btn-default brand-box brand-logo" id="wild-zora-logo" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
     </button>
       
     </div> 

     <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <button type="button" class="btn btn-default brand-box brand-logo" id="rm-popcorn-logo" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
     </button>
       
     </div> 

   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <button type="button" class="btn btn-default brand-box brand-logo" id="horseshoe-logo" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
     </button>
       
     </div>

</div>
</div>




<div class="container black-back">
<div class="row">
                         
 

  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
     <button type="button" class="btn btn-default brand-box brand-logo" id="gsl-logo" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
     </button>
       
     </div>

   <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <div class="bottom-logo"><img src="/wordpress/wp-content/themes/hyperion_theme1/assets/images/hyperion-logo.svg"/></div>
      </div>  

</div>
</div>






    <?php endwhile;

    else :
        echo '<p>No content found</p>';

    endif;

get_footer();

?>