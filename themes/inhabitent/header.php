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

        <form role="search" method="get" action="<?php echo home_url('/')?>">
                <fieldset>
                    <a href="#" class="search-toggle">
                        <i class="fa fa-search"></i>
                    </a>
                    <label>
                         <input placeholder="Type and hit enter" type="search" name="s" value="<?php echo esc_attr(get_search_query()) ;?>" />
                    </label>
                    <input type="submit" id="search-submit" value="<?php echo esc_attr('Search')?>"/>
                </fieldset>
        </form>

            <?php wp_nav_menu(array(
            'theme_location' => 'main'
            )) ;?>  
   


        </nav>
</header>

