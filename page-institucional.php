<?php get_header(); ?>
<main>

	<div class="container">
		<section class="instituto">
			<h1>O Instituto</h1>
			
			<?php 
			// Se houver algum posts
			if( have_posts() ) :
				// Enquanto houver posts, mostre-os pra gente
				while( have_posts() ) : the_post();

			 ?>

			<?php the_content(); ?>

			<?php 
				endwhile;
			else:
			?>

			<p>There's nothing yet to be displayed...</p>

			<?php endif; ?>
				

		</section>
	</div>
</main>

<?php get_footer(); ?>