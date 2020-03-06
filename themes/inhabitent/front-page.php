<?php get_header(); ?>
<div class="onHero">
<img id="logo" src="wp-content/themes/inhabitent/assets/images/logos/inhabitent-logo-full.svg">
<?php the_post_thumbnail(); ?>
</div>

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



<h2 class="title">SHOP STUFF</h2>

<div class="shopGrid">
<?php 
$terms = get_terms(array(
  'taxonomy' => 'product-type',
  'hide_empty' => false
));


foreach($terms as $term) : 

  $file_name = $term->name . ".svg";
?>
  <div class="items">
    <img  class="jImage" src='<?php echo get_template_directory_uri() . "/assets/images/product-type-icons/$file_name"?>'>
    <?php echo "<p>";
          echo $term->description; 
          echo "</p>";
          echo "<button>";
          echo $term->name . ' stuff';
          echo "</button>";
    ?>
  </div>
<?php endforeach; ?>
</div>

<!-- CUSTOM POST LOOP STARTS-->
<h2 class="title">INHABITENT JOURNAL</h2>
<div class="journalGrid">
<?php
   $args = array(
      'post_type' => 'post', 
       'order' => 'ASC' ,
       'numberposts' => 3
   );
   $product_posts = get_posts( $args ); // returns an array of posts
?>



<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

  <div class="jItems">
   <div class="journImg">
        <?php the_post_thumbnail() ?>
   </div>
   <div class="comments">
   <p><?php echo the_date();?></p>
   <!-- <p><?php echo get_comments();?></p> -->
   <h4> <?php the_title() ?> </h4>
   <a href="<?php the_permalink();?>">
   <button class="journalBtn">READ ENTRY</button></a>
   </div>
  </div>
    <?php endforeach; wp_reset_postdata(); ?>
</div>
   
<!-- <article>
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
</article> -->

<?php get_footer();?>
