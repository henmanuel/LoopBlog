<?php get_header(); ?>

<section id="main">
	<article id="single">

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

	<h2><?php the_title(); ?>.</h2>

	<h3><small> Publicado por <?php the_author_posts_link() ?>  el <?php the_time('j/m/Y') ?>. Categoría: <?php the_category(', '); ?></small></h3>

	<div class="post">
		<?php the_content(); ?>
		<div style="margin-top:10px;" class="like"></div>
	</div>

	<?php endwhile; ?>
	<?php endif; ?>
	</article>
        <div id="postId"></div>
        <script>
            $(document).ready(function(){
		$('.like').append('<div class="fb-like" data-href="'+window.location+'" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>');
           	var idFb = $('.postId').text();
            	if (idFb.length > 0){
                	$('#postId').append('<div class="fb-comments" data-href="https://www.facebook.com/bucleadores/posts/'+idFb+'" data-width="100%" data-numposts="50"></div>'); 
            }else{alert('Agrega la siguiente etiqueta a tu entrada con el id respectivo al post de facebook <p style="display:none" class="postId">xxxxxxxxxxxxx</p> puedes verla, copiarla y pegarla presionando la combinando Ctrl + Shift + I luego marcando la opción console, recuerda el id esta relacionado al post de facebook que lo puedes ver dando click en la fecha y dirigiéndote a la url en el navegador copias la serie de números al final de la url y lo pegas remplazando la serie de XXX en esta etiqueta de ejemplo');
		console.log('<p style="display:none" class="postId">xxxxxxxxxxxxx</p>');
		}
            });
        </script>
</section>

<?php get_footer(); ?>