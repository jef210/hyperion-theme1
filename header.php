<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="container">

<!-- site header -->
<header class="site-header">
    <div class="row">
        <div class="col-sm-6">
         <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/hyperionlogobigx.png" id="top-logo"/>
            </a></a>
         </div>
         <div class="col-sm-6">
            <p id="hyperion-blurb">Hyperion Wholesale is privileged to be a full service DSD and Wholesale distributor in the Front Range of Colorado.  We pride ourselves in our top-notch customer service, our product guarantees, and the product brands we represent.</p>
            <p id="hyperion-blurb">For more information please contact us</p>
            </div>
        <!-- <h5><?php /*bloginfo('description'); */?></h5> -->

    </div>

</header>


