<?php get_header(); ?>
	<main>
		<div class="container">
			
			<?php get_search_form(); ?>

			<div class="widget">
				<?php
				if( is_active_sidebar( 'sidebar-1' )){
					dynamic_sidebar( 'sidebar-1' );
				}

				?>
			</div>

			<section class="posts">

				<?php 
				// Se houver algum posts
				if( have_posts() ) :
					// Enquanto houver posts, mostre-os pra gente
					while( have_posts() ) : the_post();

				 ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

				<?php 
					endwhile;
					
					the_posts_pagination(
                        array(
                            'prev_text' => 'Previous',
                            'next-text' => 'Next',
                            'screen_reader_text' => ' ',
                        )
                        );
				else:
				?>

				<p>There's nothing yet to be displayed...</p>

				<?php endif; ?>
				
			</section>
			<?php wp_reset_query(); ?>

		</div>
	</main>

<?php get_footer(); ?>