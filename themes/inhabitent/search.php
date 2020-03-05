<?php get_header(); ?>
<a href="./home"><img id="tent" src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent.svg"></a>
<p>You searched for " <?php echo esc_html( get_search_query( false ) ); ?> ". Here are the results:</p>
<?php the_title(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    
    <!-- <h3><?php the_permalink();?></h3> -->
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php the_post_thumbnail(); ?>
 
   
     <!-- Loop ends -->
    <?php endwhile;?>
    <?php the_posts_navigation();?>
    
    

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>