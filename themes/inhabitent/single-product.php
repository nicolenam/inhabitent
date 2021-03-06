<?php get_header(); ?>
<a href="./home"><img id="tent" src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent.svg"></a>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

        
    
    <div class="proContainer">
    <div class="proImg"><?php the_post_thumbnail();?></div>

    <div class="proInfo">
    <h2><?php the_title(); ?></h2>
    <h3><?php echo '$'.get_field('price');?></h3>
    <p><?php the_content(); ?><p>
    </div>
    
    </div>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>
    

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>