<?php get_header(); ?>
<!-- <img src="<?php echo get_template_directory_uri() . '/assets/images/home-hero.jpg';?>"> -->
<img id="tent" src="wp-content/themes/inhabitent/assets/images/logos/inhabitent-logo-tent-white.svg">
<div class="onHero">
<img id="logo" src="wp-content/themes/inhabitent/assets/images/logos/inhabitent-logo-full.svg">
<?php the_post_thumbnail(); ?>
</div>

<!-- shop stuff here -->
<article>
<h2 class="title">SHOP STUFF</h2>

<div class="shopGrid">
  <div class="items">
    <img src="wp-content/themes/inhabitent/assets/images/product-type-icons/do.svg">
    <p>
    Get back to nature with all </br>
    the tools and toys you need to </br>
    enjoy the great outdoors. </br>
    </p>
    <button class="shopBtn">DO STUFF</button>
  </div>
  <div class="items">
    <img src="wp-content/themes/inhabitent/assets/images/product-type-icons/eat.svg">
    <p>
    Nothing beats food cooked</br>
    over a fire. We have all you</br>
    need for good camping eats. </br>
    </p>
    <button class="shopBtn">EAT STUFF</button>
  </div>
  <div class="items">
    <img src="wp-content/themes/inhabitent/assets/images/product-type-icons/sleep.svg">
    <p>
    Get a good night's rest in the</br>
    wild in a home away from</br>
    home that travels well.</br>
    </p>
    <button class="shopBtn">SLEEP</button>
  </div>
  <div class="items">
    <img src="wp-content/themes/inhabitent/assets/images/product-type-icons/wear.svg">
    <p>
    From flannel shirt to toques,</br>
    look the part while roughing</br>
    it in the great outdoors.</br>
    </p>
    <button class="shopBtn">WEAR STUFF</button>
  </div>
</div>
</article>
<article>
    <h2 class="title">INHABITENT JOURNAL</h2>
    <div class="journalGrid">
        <div class="jItems">
            <div class="journImg">
                <img src="wp-content/themes/inhabitent/assets/images/blog-photos/van-camper.jpg">
            </div>
            <button class="journalBtn">READ ENTRY</button>
        </div>
        <div class="jItems">
            <div class="journImg">
                <img src="wp-content/themes/inhabitent/assets/images/blog-photos/warm-cocktail.jpg">
            </div>
            <button class="journalBtn">READ ENTRY</button>
        </div>
        <div class="jItems">
            <div class="journImg">
                <img src="wp-content/themes/inhabitent/assets/images/blog-photos/healthy-camp-food.jpg">
            </div>    
            <button class="journalBtn">READ ENTRY</button>
        </div>
  </div>
</article>
<article>
  <h2 class="title">LATEST ADVENTURES</h2>
    <div class="adGrid">
        <div class="adItems">
          <img src="wp-content/themes/inhabitent/assets/images/adventure-photos/canoe-girl.jpg" alt="">
          <p>Getting Back to </br>
            Nature in a Canoe</p>
          <button>READ MORE</button>
        </div>
        <div class="adItems">
          <img src="wp-content/themes/inhabitent/assets/images/adventure-photos/beach-bonfire.jpg" alt="">
          <p>A Night with Friends at </br>
            the Beach</p>
          <button>READ MORE</button>
        </div>
        <div class="adItems">
          <img src="wp-content/themes/inhabitent/assets/images/adventure-photos/mountain-hikers.jpg" alt="">
          <p>Taking in the </br>
            view at Big</br>
            Mountain</p>
          <button>READ MORE</button>
        </div>
        <div class="adItems">
          <img src="wp-content/themes/inhabitent/assets/images/adventure-photos/night-sky.jpg" alt="">
          <p>Star-Gazing at </br>
            the Night Sky</p>
          <button>READ MORE</button>
        </div>
    </div>
</article>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>


    <!-- <h2><?php the_title(); ?></h2> -->
    <!-- <h3><?php the_permalink();?></h3> -->
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>
  
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>