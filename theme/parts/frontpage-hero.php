<section id="fp-cta" class="block fp-cta">

	<?php
		function gf ( $key ) {
			return get_field('fp_cta_' . $key );
		}
		function imgsrc ( $id ) {
			return '<img src="' . wp_get_attachment_image_url( $id ) . '" srcset="' . esc_attr(wp_get_attachment_image_srcset( $id ) ) . '">';
		}

		$hero_type = gf('layout'); // hero, split, slide, none
		if ($hero_type == 'hero') :

			$hero_img_ID = gf('hero_image');

			if ( gf('hero_link') ) {
				echo '<a class="fp-cta__link" href="' . gf('hero_link') . '">' . imgsrc($hero_img_ID) . '</a>';
			} else {
				echo '<a class="fp-cta__link" href="">' . imgsrc($hero_img_ID) . '</a>';
			}

			?>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 370 85" class="fp-cta__logo-text">
			  <g id="Group_168" data-name="Group 168" transform="translate(-308.707 -51.079)">
			    <path id="Path_1" data-name="Path 1" d="M61.075,84.9H46.3V10.612C49.688,7.265,53.116,3.8,56.708.245c8.571,8.694,17.265,17.51,25.836,26.162C91.727,17.183,100.5,8.449,108.91,0c4.122,4.041,7.673,7.551,11.632,11.469v73.3H105.6V25.836c-7.592,7.632-14.693,14.775-22.122,22.285-7.551-7.592-14.693-14.775-22.448-22.53C61.075,45.754,61.075,65.182,61.075,84.9Z" transform="translate(262.407 51.079)"/>
			    <path id="Path_2" data-name="Path 2" d="M796.522,62.927c-8.857-8.816-17.632-17.55-26.122-26.04V25.582h10.816c8.53,8.571,17.265,17.387,25.713,25.918,8.939-8.939,17.755-17.8,26-26H844.6V36.847c-8.326,8.285-17.142,17.061-25.755,25.632,8.816,8.775,17.551,17.51,25.877,25.8V99.824H833.5c-8.367-8.408-17.1-17.183-25.836-25.958-8.734,8.816-17.51,17.591-25.877,26H770.482v-10.9C778.93,80.478,787.787,71.662,796.522,62.927Z" transform="translate(-166.151 35.986)"/>
			    <path id="Path_3" data-name="Path 3" d="M645.312,84.945h22.407v-59.3h14.775V84.986c-5.02,5.02-9.959,9.918-15.02,14.979H645.8c-5.02-5.02-9.877-9.877-15.1-15.142V25.6h14.612Z" transform="translate(-83.47 35.927)"/>
			    <path id="Path_4" data-name="Path 4" d="M547.066,25.5V40.234H517.883V55.213h19.224V70.193H517.842V84.886H546.9V99.7H517.271C512.5,94.927,507.68,90.07,502.7,85.09V40.724c5.061-5.061,10-9.959,15.265-15.224Z" transform="translate(-7.713 35.986)"/>
			    <path id="Path_5" data-name="Path 5" d="M341.175,25.7V85.086h24.693V99.9H341.5c-5.02-4.979-9.918-9.877-15.1-15.02V25.7Z" transform="translate(96.63 35.868)"/>
			    <path id="Path_6" data-name="Path 6" d="M265.83,100.006H251.177V40.62H241.3V25.6h9.428c4.979,5.02,9.959,10,15.1,15.183Z" transform="translate(146.996 35.927)"/>
			    <path id="Path_7" data-name="Path 7" d="M426.987,25.8,442.13,40.82v59.264H427.436V40.7H417.6V25.8Z" transform="translate(42.653 35.809)"/>
			  </g>
			</svg>
			<?php if ( get_field( 'fp_cta_hero_cta' ) ) : ?>
			<div class="fp-cta__cta-block">
				<div class="fp-cta__cta-block__inner">
					<a href="<?= gf('hero_link'); ?>"><?php the_field('fp_cta_hero_cta') ?></a>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 14">
					  <path data-name="Path 22" d="M68.039,14.241,67.6,13.8l6.65-6.65L67.6.439,68.039,0l7.152,7.152Z" transform="translate(-25.191)"/>
					  <path data-name="Path 23" d="M0,10.9H49.5v.69H0Z" transform="translate(0 -4.062)"/>
					</svg>
				</div>
			</div>
		<?php endif;
	endif; ?>

</section>
