<?php get_header(); ?>
<section class="container about-page"> </section>
<a href="./home"><img id="tent" src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent-white.svg"></a>
<div class="aboutContainer">
<h2 id="aboutTitle"><?php the_title(); ?></h2>
<?php the_post_thumbnail(); ?>
</div>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <!-- <div class="about" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)
     -->
   
<!--     
    <h3><?php the_permalink();?></h3> -->
    <div class='content'>
    <?php the_content(); ?>
    </div>
    <!-- Loop ends -->


    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>


<?php get_footer();?>