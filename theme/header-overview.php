<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,700|Lora:400,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'milx' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php the_custom_logo(); ?>
		</div>

		<?php get_template_part( 'searchform', 'header' ); ?>

		<div id="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<p>menu</p>
			<span></span>
		</div>

		<div class="overview-header">
			<div class="page-title">
				<?php the_title(); ?>
			</div>

		<?php
			// build page section nav
			$id = get_the_ID();
			while ( have_posts() ) : the_post();
				$gp_args = array(
						'post_type' => 'page',
						'post_parent' => $id,
						'order' => 'ASC',
						'orderby' => 'menu_order',
						'posts_per_page' => -1
				);

				$locations = get_posts($gp_args);

				if ($locations) {
					echo '<nav class="local-nav"><ul>';

					foreach ($locations as $location) {
						$eyedee = $location->ID; // I'm so fucking cheeky.
						echo '<li class="local-nav__item"><a href="' . get_the_permalink($eyedee) . '">' . get_the_title($eyedee) . '</a></li>';
					}

					echo '</ul></nav>';
				}

			endwhile;
		?>
		</div>
	</header>

	<nav id="site-navigation" class="main-navigation">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</nav>

	<div id="content" class="site-content">
