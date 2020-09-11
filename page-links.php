<?php get_header(); ?>
	<main>
		
		<div class="container">
			<section class="utilidade">
				
				<?php
				$objeto = new WP_Query( 'post_type=utilidade' );

				if($objeto->have_posts() ) :
					while ($objeto->have_posts()) : $objeto->the_post();
				?>

				<a href="<?php the_field('site'); ?>" target="_blank">
					<article class="uteis">
						<?php the_post_thumbnail(); ?>
					</article>
				</a>

				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>

			</section>
		</div>
	</main>

<?php get_footer(); ?>