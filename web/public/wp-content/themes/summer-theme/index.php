<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package
 * @since 
 */
 
get_header(); ?>
<div class="maincontainer">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <ul class="post_in_ul">
        
         <h3><a class="link_on_image" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3> 
         <?php the_post_thumbnail('featured-large',get_the_ID()) ?>
</ul>
         
    <?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>