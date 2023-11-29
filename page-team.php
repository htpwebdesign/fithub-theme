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

			if ($query->have_posts()) :
		?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<section class="fithub-teampage">
			<?php
			while ($query->have_posts()) :
				$query->the_post();
				if (function_exists('get_field')) :
			?>
			<article class="team-page">
				<?php the_post_thumbnail('medium'); ?>

				<h3><?php echo get_the_title(); ?></h3>

				<?php if (get_field('team_description')) :?>

				<p><?php echo get_field('team_description'); ?> </p>
				<h3>What they Offer:</h3>
				<?php 
				endif;

				if (get_field('first_service')) :
					$link = get_field("first_service");
					if ($link): ?>
						<a class="button" href="<?php echo esc_url( $link['url'] ); ?>">
							<h3><?php echo esc_html( $link['title'] ); ?></h3>
						</a>				
				<?php 
				endif;
				endif;
				if (get_field('second_service')) :
					$link = get_field("second_service");
					if ($link): ?>
						<a class="button" href="<?php echo esc_url( $link['url'] ); ?>">
							<h3><?php echo esc_html( $link['title'] ); ?></h3>
						</a>
				<?php 
				endif;
					endif; ?>
			</article>
						<?php
					endif;
				endwhile;
				wp_reset_postdata();
			endif 
			?>
		</section>

	</main><!-- #main -->

<?php
get_footer();
