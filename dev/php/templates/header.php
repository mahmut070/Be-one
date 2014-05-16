<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

    <!-- Include only one concatenated stylesheet here, minified -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">


    <!-- Head scripts, avoid including scripts here -->
    <!-- Don't forget to compile and minify the used modernizr features, or to remove it when unused -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/modernizr.js"></script>

    <!-- Wordpress head function -->
    <?php wp_head(); ?>

   </head>
  <body <?php body_class(); ?> >
    <header class="Header">
        <div class="Header-topbar">
            <div class="u-gridContainer">
                <?php include_once('includes/navigation.php'); ?>
                <svg class="Icon Icon--alone" viewBox="0 0 128 128">
                    <use xlink:href="#icon-facebook2"></use>
                </svg>
                <svg class="Icon Icon--alone2" viewBox="0 0 128 128">
                    <use xlink:href="#icon-googleplus3"></use>
                </svg>
            </div>
            <div class="Slider">
                <ul class="Slider-slider bxslider">     
                    <li class="Slider-img"><img src="/files/2014/05/Army_National_Guard_motorcycle_riders.jpg" /></li>
                    <li><img src="/files/2014/05/dscf1953.jpg" /></li>
                </ul>
            </div>
        </div>
                

        <!-- <div class="Header-tagline">

            <div class="u-gridContainer">

                <div class="Header-tag-1">
                    <h5 class="Header-tag">Haal uw autorijbewijs bij Be One Autorijschool</h5>
                <div>
                <div class="Header-tag-2">
                    <h5 class="Header-tag2">Met gratis proefles!</h5>
                </div>
            </div>
        </div> -->
   </header>
