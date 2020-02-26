<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" id="font-awesome-css" href="http://cdn.crunchify.com/wp-content/icon/font-awesome/css/font-awesome.min.css?ver=4.6.1" 
    type="text/css" media="all"> 
</head>
<body <?php body_class();?>>
<!-- <img id="homeBackground" src="wp-content/themes/inhabitent/assets/images/home-hero.jpg"> -->

<header>
        <nav class="<?php echo is_page(array('About', 'Home')) ? 'main-menu' : 'main-menu2' ;?>">

<!-- Menu -->
        <?php wp_nav_menu(array(
        'theme_location' => 'main'
        )) ;?>  
        </nav>
    </header>

