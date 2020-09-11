<?php get_header(); ?>
	<main>
		<section class="postagem">
				<?php 
				// Se houver algum posts
				if( have_posts() ) :
					// Enquanto houver posts, mostre-os pra gente
					while( have_posts() ) : the_post();

				 ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<?php 
					endwhile;
				else:
				?>

				<p>There's nothing yet to be displayed...</p>

				<?php endif; ?>
				
				<div class="container">
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Imoveis' ) ) ); ?>">
						<i class="fas fa-angle-left"></i><span>Voltar para a lista</span>
					</a>
				</div>
			
		</section>		
	</main>

<?php get_footer(); ?>