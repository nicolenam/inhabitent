<?php get_header(); ?>
<a href="./home"><img id="tent" src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent.svg"></a>
<div class="onHero">
<!-- <?php the_post_thumbnail(); ?> -->
<h2 id="shopTitle">SHOP STUFF</h2>
</div>
<div class="shopContainer">
<p>DO</p>
<p>EAT</p>
<p>SLEEP</p>
<p>WEAR</p>
</div>





<div class="productGrid">
<?php if( have_posts() ) :


//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <a href="<?php the_permalink();?>">
    
    <div class="shopItems">
     <?php the_post_thumbnail()?>
    
     <!-- <a href="<?php the_permalink();?>"> -->

    <span class="priceCont">
        <p><?php the_title(); ?><p>
        <!-- <span class='price'> -->
        <?php echo '$'.get_field('price');?>
        <!-- </span> -->
        
    </span>

    </div>
    
    
    <!-- <?php the_content(); ?> -->
   
 
    <!-- Loop ends -->
    <?php endwhile;?>
   
    <!-- <?php the_posts_navigation();?> -->
    
    </div>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
    
<?php get_footer();?>




