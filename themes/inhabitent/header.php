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
        

      <nav class="<?php echo is_page(array('ABOUT', 'Home')) ? 'main-menu ' : 'main-menu2' ;?>">
      
       <!-- SEARCH GOES HERE -->
       <div class="header-search">
              <?php get_search_form();?>
       </div>

      <a href="<?php echo get_home_url(); ?>">   
      <img id="tent" src="<?php echo is_page(array('About', 'Home')) ? 
      get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-tent-white.svg' :
      get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-tent.svg' ;?> " > 
      </a> 
        
    

            <?php wp_nav_menu(array(
            'theme_location' => 'main',
            )) ;?>  

           
        </nav>
</header>

