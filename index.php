<?php get_header(); ?>

<section id="main">

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<div class="postcont">
	<div class="postbar">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
	<?php the_excerpt(); ?>

	<div class="thumbnail">
      	<?php
          	if ( has_post_thumbnail() ) { 
                	the_post_thumbnail();
          	}
      	?>
   	</div>
</div>

<?php endwhile; else: ?>	

<p><?php _e('No hay entradas .'); ?></p>

<?php endif; ?>

</section>

<?php get_footer(); ?>