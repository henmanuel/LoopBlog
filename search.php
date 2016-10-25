<?php get_header(); ?>

<section id="main">

<h2 class="inf">Resultados de la búsqueda</h2>

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

<?php endwhile;?>

<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
<?php  else: ?>
<div class="entry"><?php _e('<h2 class="inf">Lo sentimos, no hay resultados con este término de búsqueda.</h2>'); ?></div>
<?php endif; ?>

</section>