<div class="thumbnail">
		<?php the_post_thumbnail(); ?>
		<h5>Para 
			<?php foreach((get_the_category()) as $category){
	        	echo $category->name;
	        } ?>
        	
        </h5>
		<h2><?php the_title(); ?></h2>
		<h3>Código: <?php echo get_the_ID(); ?></h3>
</div>

<div class="info">
	<div class="container">
		<div class="preco">
			<span class="texto">Valor: </span><span>R$ </span><span class="valor"><?php the_field('valor') ?></span>
		</div>
		<div class="informacoes">
			<h3><strong>Complemento:</strong> <?php the_field('complemento') ?></h3>
			<h4><i class="fas fa-home"></i><?php the_field('quartos') ?></h4>
			<h4><i class="fas fa-arrows-alt"></i><?php the_field('tamanho') ?></h4><span class="tamanho">m²</span>
		</div>
	</div>
</div>

<div class="galeria">
	<div class="container">

		<?php
		$images = acf_photo_gallery('slide', $post->ID);

			if ( count($images) ) : ?>

				<ul class="slide">

					<?php foreach( $images as $image ) : ?>

					<li class="item">
						<img src="<?php echo $image['thumbnail_image_url']; ?>" alt="<?php echo $image['title']; ?>">
					</li>

					<?php endforeach; ?>


				</ul>

			<?php endif; ?>
	

	</div>
</div>

<div class="container">
	<?php if( '' !== get_post()->post_content ) : ?>
		<h1>Descrição</h1>
	<?php endif; ?>
	<?php the_content(); ?>
</div>