<?php get_header(); ?>

<p class="results">You searched for " <?php echo esc_html( get_search_query( false ) ); ?> ". Here are the results:</p>

<?php the_title(); ?>
<div class="posts">
<?php get_sidebar(); ?>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    
    <!-- <h3><?php the_permalink();?></h3> -->
    <h2><?php the_title(); ?></h2>
    
    <p><?php echo wp_trim_words(get_the_content(), 20, '[...]') ; ?></p>

     <!-- Loop ends -->
    <?php endwhile;?>
    <?php the_posts_navigation();?>
    
    

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</div>
<?php get_footer();?>