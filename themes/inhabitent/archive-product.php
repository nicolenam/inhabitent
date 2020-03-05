<?php get_header(); ?>

<div class="onHero">
<h2 id="shopTitle">SHOP STUFF</h2>
</div>


<div class="shopContainer">

        <?php 
        $terms = get_terms(array(
        'taxonomy' => 'product-type',
        'hide_empty' => false
        ));


        foreach($terms as $term) : 
        ?>

            <?php echo "<p>";
                echo $term->name; 
                echo "</p>";
            ?>
        <?php endforeach; ?>

</div>






<div class="productGrid">
            <?php if( have_posts() ) :


            //The WordPress Loop: loads post content 
                while( have_posts() ) :
                    the_post(); ?>

                <a href="<?php the_permalink();?>">
            
                <div class="shopItems">
                <?php the_post_thumbnail()?>
                
            
                <span class="priceCont">
                    <p><?php the_title(); ?><p>
                    <!-- <span class='price'> -->
                    <?php echo '$'.get_field('price');?>
                    <!-- </span> -->
                    
                </span>

</div>
 
    <!-- Loop ends -->
    <?php endwhile;?>
   
    <?php the_posts_navigation();?>
    
</div>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
    
<?php get_footer();?>




