<?php
/* The template for displaying portfolio items
 *
 * @package MWM_Portfolio
 */

				if ( get_query_var( 'paged' ) ) :
					$paged = get_query_var( 'paged' );
				elseif ( get_query_var( 'page' ) ) :
					$paged = get_query_var( 'page' );
				else :
					$paged = 1;
				endif;

				$posts_per_page = get_option( 'jetpack_portfolio_posts_per_page', '10' );
				$args = array(
					'post_type'      => 'jetpack-portfolio',
					'posts_per_page' => $posts_per_page,
					'paged'          => $paged,
				);
				$project_query = new WP_Query ( $args );
				if ( post_type_exists( 'jetpack-portfolio' ) && $project_query -> have_posts() ) :
			?>

				<div class="portfolio-wrapper">

					<?php /* Start the Loop */ ?>
					<?php while ( $project_query -> have_posts() ) : $project_query -> the_post(); ?>

						<?php get_template_part( 'components/features/portfolio/content', 'portfolio' ); ?>

					<?php endwhile; ?>

				</div>
				<?php
					the_posts_navigation();
					wp_reset_postdata();
				?>

			<?php else : ?>

				<section class="no-results not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'awesome' ); ?></h1>
					</header>
					<div class="page-content">
						<?php if ( current_user_can( 'publish_posts' ) ) : ?>

							<p><?php printf( wp_kses( __( 'Ready to publish your first project? <a href="%1$s">Get started here</a>.', 'awesome' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php?post_type=jetpack-portfolio' ) ) ); ?></p>

						<?php else : ?>

							<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'awesome' ); ?></p>
							<?php get_search_form(); ?>

						<?php endif; ?>
					</div>
				</section>
			<?php endif; ?>