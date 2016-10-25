<?php get_header(); ?>

<section id="main">
	<article id="single">

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

	<h2><?php the_title(); ?>.</h2>

	<h3><small> Publicado por <?php the_author_posts_link() ?>  el <?php the_time('j/m/Y') ?>. Categoría: <?php the_category(', '); ?></small></h3>

	<div class="post">
		<?php the_content(); ?>
	</div>

	<?php endwhile; ?>
	<?php endif; ?>

	</article>
	<div class="fb-comments" data-href="https://www.facebook.com/bucleadores/posts/1811837572378749" data-width="100%" data-numposts="50"></div>
</section>

<?php get_footer(); ?>