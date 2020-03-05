<?php get_header(); ?>
<a href="./home"><img id="tent" src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent.svg"></a>
<div class="posts">
<?php get_sidebar(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
      <div class="journalLayout">

        <h2><?php the_title(); ?></h2>

            <div class="dateAuthor">
            <p><?php echo the_date() . '/&nbsp by'; ?></p>
            <p><?php the_author(); ?></p>
            </div>

    <?php the_post_thumbnail(); ?>
 
    <p><?php echo wp_trim_words(get_the_content(), 20, '[...]') ; ?></p>

    <a href="<?php the_permalink();?>">
    <button>  READ MORE -></button>
   
    </div>
    <!-- Loop ends -->
    <?php endwhile;?>
</div>
    <?php the_posts_navigation();?>
    
    

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>