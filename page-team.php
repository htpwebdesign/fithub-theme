<?php
/**
 * The template for displaying all pages
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

		<?php
		$args = array(
			'post_type'      => 'fithub-team',
			'posts_per_page' => -1,
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) {
			echo '<section>
			<h2>Our Team</h2>';
			while ($query->have_posts()) {
				$query->the_post();
				if (function_exists('get_field')) {
					echo "<article>";
					the_post_thumbnail('medium');
					echo '<h3>' . get_the_title() . '</h3>';
					
					// Adjust the following conditions based on your requirements
					if (get_field('team_description')) {
						echo '<p>' . get_field('team_description') . '</p>';
					}
					if (get_field('first_service')) {
						$link = get_field("first_service");
						if ($link): ?>
                            <a class="button" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
						<?php endif;
					}
					if (get_field('second_service')) {
						$link = get_field("second_service");
						if ($link): ?>
                            <a class="button" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
						<?php endif;
					}
					echo "</article>";
				}
			}
			wp_reset_postdata();
			echo '</section>';
		}
		?>

	</main><!-- #main -->

<?php
get_footer();
