<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php the_post_thumbnail(); ?>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<nav class='main-menu'>
    <?php wp_nav_menu(array(
        'theme-location' => 'main'
    )) ;?>
</nav>

