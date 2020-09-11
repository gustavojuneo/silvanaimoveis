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
				global $wp_query;
				query_posts(
				array_merge(
				array(
				'posts_per_page' => 12,
				'category__not_in' => array( 23 ),
				),
				$wp_query->query
				)
				);
				// The Loop
				if (have_posts()) :
					while (have_posts()) : the_post();

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

		</div>
	</main>

<?php get_footer(); ?>
