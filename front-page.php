<?php
/**
 * The template for displaying the Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fithub_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<!-- Team Secton -->
		<section class="fithub-team" >
		<h2>Team</h2>
		<?php
			$args = array(
				'post_type'	=> 'fithub-team',
				'posts_per_page' => -1
			);
			$team_query = new WP_Query($args);
			if ($team_query->have_posts()) {
				while ($team_query->have_posts()) {
					$team_query->the_post();
			?>
				<article>
				<h3><?php the_title(); ?></h3>
                <?php the_post_thumbnail('medium'); ?>
                <?php the_excerpt(); ?>
				<br>
                <button onclick="window.location='<?php echo esc_url( get_page_link( 111 ) ); ?>'">
					<h3>Check our Team</h3>
                </button>
            </article>
			<?php
				}
				wp_reset_postdata();
			}
		?>
		</section>

		<!-- Service Secton -->
		<section class="services-menu">
			<h2>Services We Offer</h2>
			<?php
				$args = array(
					'post_type'	=> 'product',
					'posts_per_page' => 3,
					'tax_query'      => array(
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => 'services'
						)
					)
				);
			$service_query = new WP_Query($args);
			if ($service_query->have_posts()) {
				while ($service_query->have_posts()) {
					$service_query->the_post();
			?>
			<article>
				<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large'); ?>
					<h3><?php the_title(); ?></h3>
				</a>
			</article>
			<?php
				}
				wp_reset_postdata();
			}
		?>
		</section>

		<!-- Product Secton -->
		<section class="products-menu">
		<h2>Our Array of Products</h2>
		<?php
			$args = array(
				'post_type'	=> 'product',
				'posts_per_page' => 3,
				'order' => 'ASC',
				'orderby' => 'title',
				'tax_query'      => array(
					array(
						'taxonomy' => 'product_cat',
						'field' => 'slug',
						'terms' => 'services',
						'operator' => 'NOT IN',
					)
				)
			);
			$product_query = new WP_Query($args);
			if ($product_query->have_posts()) {
				while ($product_query->have_posts()) {
					$product_query->the_post();
			?>
				<article>
					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('large'); ?>
						<h3><?php the_title(); ?></h3>
					</a>
				</article>
			<?php
				}
				wp_reset_postdata();
			}
		?>
		</section>

		<!-- Post Secton -->
		<section class="blog-menu">
		<h2>React to Our Blog</h2>
		<?php
			$args = array(
				'post_type'	=> 'post',
				'posts_per_page' => 3,
				'order' => 'ASC',
				'orderby' => 'title',
			);
			$blog_query = new WP_Query($args);
			if ($blog_query->have_posts()) {
				while ($blog_query->have_posts()) {
					$blog_query->the_post();
			?>
				<article>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('large'); ?>
						<h3><?php the_title(); ?></h3>
					</a>
					
					
				</article>
			<?php
				}
				wp_reset_postdata();
			}
		?>
		</section>
		<?php
			echo do_shortcode( '[instagram-feed feed=1]' ); 
		?>

	</main><!-- #main -->

	

<?php
get_footer();
