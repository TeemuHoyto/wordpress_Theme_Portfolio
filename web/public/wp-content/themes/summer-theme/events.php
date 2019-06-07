<?php get_header(); ?>
 
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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
    <article id="events-<?php the_ID(); ?>">
        <h1><?php the_title(); ?></h1>
        <section class="event_container">
            <?php echo get_event_calendar_icon(); ?>
            <section class="event_desc">
                <?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>
                <?php echo get_event_details(true, false); ?>
             </section>
          </section>
     </article>
<?php endwhile; endif; ?>
 


<?php get_footer(); ?>