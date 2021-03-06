<?php get_header(); ?>
<a href="./home"><img id="tent" src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent.svg"></a>
<div class="posts">
<?php get_sidebar(); ?>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    

    <!-- <h3><?php the_permalink();?></h3> -->
    <div class="journalLayout">

    <h2><?php the_title(); ?></h2>

            <div class="dateAuthor">
            <p><?php echo the_date() . '/&nbsp by'; ?></p>
            <p><?php the_author(); ?></p>
            </div>
            
    <?php the_post_thumbnail(); ?>        

    <?php the_content(); ?>
    
    </div>
    <!-- Loop ends -->
    <?php endwhile;?>
    </div>
    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>