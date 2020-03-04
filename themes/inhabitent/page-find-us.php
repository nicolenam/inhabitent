<?php get_header(); ?>
<a href="./home"><img id="tent" src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent.svg"></a>
<div class="posts">
<?php get_sidebar(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
  
    <h2><?php the_title(); ?></h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.931030246438!2d-123.14089943826174!3d49.26452064334899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490%20W%20Broadway%2C%20Vancouver%2C%20BC%20V6H%204E8!5e0!3m2!1sen!2sca!4v1583348341986!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <!-- <h3><?php the_permalink();?></h3> -->
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>
</div>
    <?php the_posts_navigation();?>


<?php else : ?>
        <p>No posts found</p>
<?php endif;?>


<?php get_footer();?>