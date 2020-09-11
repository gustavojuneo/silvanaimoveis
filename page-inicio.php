<?php get_header(); ?>
	<main>
		<div class="container">
			<?php get_search_form(); ?>
		</div>

		<section class="novo-imovel">
			<h1>Imóveis Recentes</h1>
			
			<?php query_posts('post_type=post&posts_per_page=4'); ?>
			<section class="posts">

				<?php 
				// Se houver algum posts
				if( have_posts() ) :
					// Enquanto houver posts, mostre-os pra gente
					while( have_posts() ) : the_post();

				 ?>

				<?php get_template_part( 'template-parts/content' ); ?>

				<?php 
					endwhile;
				else:
				?>

				<p>There's nothing yet to be displayed...</p>

				<?php endif; ?>
				
			</section>
			<?php wp_reset_query(); ?>

		</section>
	</main>

<?php get_footer(); ?>