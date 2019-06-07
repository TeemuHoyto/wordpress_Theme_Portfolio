




<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="card" style="width: 30%; border:1px solid black; float:left;">
    <div class="card-divider" style="background-color: #818181">
    <h3><a class="link_on_image" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3> 
  </div>
  <?php the_post_thumbnail('featured-small',get_the_ID()) ?>
        <div class="card-section">
         <h3>Lovely image</h3>
         

</div>
</div>
    <?php endwhile; ?>
<?php endif; ?>
