<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Fithub_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404-not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fithub-theme' ); ?></h1>
				<p>
					<?php esc_html_e( 'Looks like you\'ve taken a detour in your workout routine. Time to \'git\' back on track and find your way to the fitness repository at Fithub.com. Don\'t let this error be a \'commit\' to skipping your workout!', 'fithub-theme' ); ?>
				</p>

				<?php
					$image_url = 'https://fithub.bcitwebdeveloper.ca/wp-content/uploads/2023/11/eduardo-cano-photo-co-9xL_8KCEQqE-unsplash-scaled.jpg';
					echo '<img src="' . esc_url($image_url) . '" alt="Fitness Image" width="300" height="200">';
					?>

			</header><!-- .page-header -->


		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
