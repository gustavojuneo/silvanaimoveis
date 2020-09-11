<article class="post">
	<div class="image">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	
	<div class="info">
		<span class="codid">Código: <span class="codnumber"><?php echo get_the_id(); ?></span> </span>
		<span class="cifrao">R$ </span><span class="valor"><?php the_field('valor'); ?></span>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<h3>Para
			<?php foreach((get_the_category()) as $category){
	        	echo $category->name . ' ' ;
	        } ?>
		</h3>
		<h3><?php the_field('complemento') ?></h3>
		<h4><?php the_field('quartos') ?></h4> | <h4><?php the_field('tamanho') ?></h4><span class="tamanho">m²</span>
	</div>
</article>