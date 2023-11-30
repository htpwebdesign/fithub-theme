<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fithub_Theme
 */

get_header();
?>
	
	<div class="blog-single-post">
		<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'fithub-theme' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'fithub-theme' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
			<div class="instagram">
			<h2>Inspect our Instagram</h2>
				<?php
					echo do_shortcode( '[instagram-feed feed=1]' ); 
				?>
			</div>
			<?php
		endwhile; // End of the loop.
		?>

</main><!-- #main -->
	</div>
	

<?php
get_footer();
