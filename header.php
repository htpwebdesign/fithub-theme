<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fithub_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fithub-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><svg role="img" aria-label="Home Icon" xmlns="http://www.w3.org/2000/svg" width="82" height="80" fill="none"><path fill="#8A0000" d="M25.306 3.12a40.993 40.993 0 0 1 56.68 37.873c0 18.119-11.724 33.45-27.998 38.943-2.09.37-2.747-.942-2.747-2.05v-7.252l5.2-1.141a7.754 7.754 0 0 0 2.334-.93l2.454-1.476.857-.188a2.585 2.585 0 0 0 1.64-1.154l.41-.651 1.249-.856a7.847 7.847 0 0 0 2.569-2.943l2.351-4.667 2.765-2.639-.354-4.663-.061-.029a1.299 1.299 0 0 0-1.11.008 1.3 1.3 0 0 0-.699.867l-.328 1.33-1.064 1.249.316-.732a1.336 1.336 0 0 0-.606-1.708l-.277-.145-1.44 2.96a2.667 2.667 0 0 0-.205 1.738l.298 1.355-3.135 1.818a7.855 7.855 0 0 0-3.466 4.203l-.065.183-1.729-.055a7.751 7.751 0 0 0-1.908.177l-6.254 1.373c-.462-2.306-1.482-3.91-2.57-4.847 9.141-1.025 18.734-4.468 18.734-20.128 0-4.55-1.558-8.198-4.223-11.109.41-1.024 1.845-5.288-.41-10.822 0 0-3.443-1.107-11.273 4.181-3.238-.901-6.764-1.352-10.248-1.352-3.484 0-7.01.45-10.248 1.352-7.83-5.288-11.273-4.18-11.273-4.18-2.255 5.533-.82 9.796-.41 10.821-2.665 2.91-4.223 6.56-4.223 11.11 0 15.618 9.552 19.143 18.652 20.168-1.148 1.025-2.213 2.828-2.582 5.493l-.103.306a3.822 3.822 0 0 0-.936-.608c-2.282-1.022-6.062 0-7.888 2.803h-.913v-6.537h1.826l.913-2.82-4.564-.914c-2.74 3.734-3.652 14.005-3.652 14.005 5.477 3.734 12.087 2.428 14.278.931a4.93 4.93 0 0 0 .875-.759v6.875c0 1.107-.656 2.377-2.706 2.05C11.765 74.483 0 59.111 0 40.992A40.993 40.993 0 0 1 25.306 3.12Z"/></svg></a>
				</div>
				<?php
			else :
				?>
				<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><svg role="img" aria-label="Home Icon" xmlns="http://www.w3.org/2000/svg" width="82" height="80" fill="none"><path fill="#8A0000" d="M25.306 3.12a40.993 40.993 0 0 1 56.68 37.873c0 18.119-11.724 33.45-27.998 38.943-2.09.37-2.747-.942-2.747-2.05v-7.252l5.2-1.141a7.754 7.754 0 0 0 2.334-.93l2.454-1.476.857-.188a2.585 2.585 0 0 0 1.64-1.154l.41-.651 1.249-.856a7.847 7.847 0 0 0 2.569-2.943l2.351-4.667 2.765-2.639-.354-4.663-.061-.029a1.299 1.299 0 0 0-1.11.008 1.3 1.3 0 0 0-.699.867l-.328 1.33-1.064 1.249.316-.732a1.336 1.336 0 0 0-.606-1.708l-.277-.145-1.44 2.96a2.667 2.667 0 0 0-.205 1.738l.298 1.355-3.135 1.818a7.855 7.855 0 0 0-3.466 4.203l-.065.183-1.729-.055a7.751 7.751 0 0 0-1.908.177l-6.254 1.373c-.462-2.306-1.482-3.91-2.57-4.847 9.141-1.025 18.734-4.468 18.734-20.128 0-4.55-1.558-8.198-4.223-11.109.41-1.024 1.845-5.288-.41-10.822 0 0-3.443-1.107-11.273 4.181-3.238-.901-6.764-1.352-10.248-1.352-3.484 0-7.01.45-10.248 1.352-7.83-5.288-11.273-4.18-11.273-4.18-2.255 5.533-.82 9.796-.41 10.821-2.665 2.91-4.223 6.56-4.223 11.11 0 15.618 9.552 19.143 18.652 20.168-1.148 1.025-2.213 2.828-2.582 5.493l-.103.306a3.822 3.822 0 0 0-.936-.608c-2.282-1.022-6.062 0-7.888 2.803h-.913v-6.537h1.826l.913-2.82-4.564-.914c-2.74 3.734-3.652 14.005-3.652 14.005 5.477 3.734 12.087 2.428 14.278.931a4.93 4.93 0 0 0 .875-.759v6.875c0 1.107-.656 2.377-2.706 2.05C11.765 74.483 0 59.111 0 40.992A40.993 40.993 0 0 1 25.306 3.12Z"/></svg></a>
				</div>
				<?php
			endif;
			$fithub_theme_description = get_bloginfo( 'description', 'display' );
			if ( $fithub_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $fithub_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div class="navigation-container">
			<div class="home-icon">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" role="img" aria-label="home-icon">
					<path d="M13 23l-9.983-.014v-9.979l8.974-7.995c1.124.999 2.25 1.998 3.378 2.998l2.255 1.999c1.127.999 2.252 1.992 3.376 2.991v10l-5.993-.014-.007-4.986h-2v5zm6-2l.019-7.121-7.028-6.193-6.991 6.218v7.096h6v-5h6v5h2zm-10-5v3h-2v-3h2zm3-15l12 10.654-1.328 1.494-10.672-9.488-10.672 9.488-1.328-1.494 12-10.654z"/>
				</svg>
				</a>
			</div>

			<div class="team-icon">
				<a href="<?php echo esc_url( get_page_link( 111 ) ); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-label="team-icon">
					<path d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"/>
				</svg>
				</a>
			</div>

			<div class="cart-icon">
				<a href="<?php echo wc_get_cart_url(); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" role="img" aria-label="cart-icon">
					<path d="M19.029 13h2.971l-.266 1h-2.992l.287-1zm.863-3h2.812l.296-1h-2.821l-.287 1zm-.576 2h4.387l.297-1h-4.396l-.288 1zm2.684-9l-.743 2h-1.929l-3.474 12h-11.239l-4.615-11h14.812l-.564 2h-11.24l2.938 7h8.428l3.432-12h4.194zm-14.5 15c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z"/>
				</svg>
				</a>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" role="img" aria-label="menu-icon">
				<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24">
					<path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm4.998 11.745c0-.414-.336-.75-.75-.75h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75zm0-3.248c0-.414-.336-.75-.75-.75h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75zm0-3.252c0-.414-.336-.75-.75-.75h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75z" fill-rule="nonzero"/>
				</svg>
				</button>
				
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'header',
						'menu_id'        => 'header-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
