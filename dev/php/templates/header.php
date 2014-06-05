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

    <!-- Title  -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

    <!--AppIon-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png"/>  
    <link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png" /> 

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
            <!-- <div class="u-gridContainer"> -->
                <?php include_once('includes/navigation.php'); ?>
                    <!-- <a class="Navigation-menuToggle" id="js-navToggle">Menu</a> -->
                    <a href="https://nl-nl.facebook.com/AutorijschoolBeOne">
                    
                    <svg class="Icon Icon--alone" viewBox="0 0 128 128">
                        <use xlink:href="#icon-facebook2"></use>
                    </svg>
                </a>

                <a href="https://plus.google.com/104862056526891610103/posts">
                    <svg class="Icon Icon--alone2" viewBox="0 0 128 128">
                        <use xlink:href="#icon-googleplus3"></use>
                    </svg>
                </a>
                <div class="Logo-small">
                    <a href="/home/"><img src="<?php echo get_stylesheet_directory_uri(); ?>//img/logo.png"></img></a>
                </div>
                        <a class="Button Button--phone" href="tel:0627315702">Bel ons</a>
                    
            </div>
            

            <div class="Slider">
                    <h4 class="Slider-heading">
                        <!-- <p class="Slider-text">Haal uw autorijbewijs bij Be One Autorijschool</p> -->
                        <p class="Slider-text">Les in een Golf 7</p>
                        <p class="Slider-text">Vanaf 16 jaar les</p>
                        <p class="Slider-text2">Met gratis proefles</p>
                        <p class="Slider-textballoon">Tijdelijke actie - eerste herexamen t.w.v. 200 euro gratis! </p>
                    </h4>

                     <!--  <div class="Slider">
                    <h4 class="Slider-heading">
    
                        <p class="Slider-textballoon">TIJDELIJKE ACTIE eerste herexamen t.w.v. 200 euro gratis! </p>
                    </h4> -->
                <ul class="Slider-slider bxslider">     
                    <li class="Slider-image"><img src="/files/2014/05/IMG_10152.jpg" /></li>
                    <li class="Slider-img"><img src="/files/2014/05/IMG_10161.jpg" /></li>
                    <li class="Slider-img"><img src="/files/2014/05/IMG_10171.jpg" /></li>
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
