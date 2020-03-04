<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body <?php body_class();?>>
<!-- <img id="homeBackground" src="wp-content/themes/inhabitent/assets/images/home-hero.jpg"> -->

<header>
        

        <a href="./home"><img id="tent" src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent-white.svg"></a>
        <nav class="<?php echo is_page(array('ABOUT', 'Home')) ? 'main-menu ' : 'main-menu2' ;?>">
        

            <?php wp_nav_menu(array(
            'theme_location' => 'main'
            )) ;?>  

            <!-- SEARCH GOES HERE -->
            <div class="header-search">
              <?php get_search_form();?>
            </div>

        </nav>
</header>

