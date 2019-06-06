<?php 
global $wp_query;
$posts = $wp_query->posts;
get_header();


          foreach($posts as $post){
            setup_postdata( $post );
            
           ?> <h2> Category: <?php  the_category(' ')?></h2>
           <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
           <?php
          }

      ?>
      <?php get_footer(); ?>