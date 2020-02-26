<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <!-- <h3><?php the_permalink();?></h3> -->
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
    <p><?php the_author(); ?></p>
    <p><?php echo the_date(); ?></p>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>
    
    

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>