<?php get_header(); ?>
<?php if ( have_events() ) : ?>
    <?php while ( have_events() ) : the_event(); ?>
        <h1>
        <?php the_title()?>
        </h1>
<p>
        <?php the_content() ?>
</div>
<div class="link">
        <?php previous_event_link() ?>
</div>
<div class="link">
        <?php next_event_link(). the_category()?>
</div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>