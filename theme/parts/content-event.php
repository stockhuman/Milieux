<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 */
?>

<section class="event__container">
	<header class="event__header">
		<h2 class="page-type-title">Event</h2>

		<?php the_title( '<h1 class="event__title mono-title">', '</h1>' ); ?>

		<div class="event__hero">
			<?= milieux_event_featured_image(get_the_ID(), 'full', false); ?>
		</div>

		<?php $cta =  get_field('event_cta');
		if ( $cta['enable'] == true ) : ?>
			<div class="event__cta">
				<?php $cta_link = $cta['link'];
				if ( $cta_link != '' ) { ?>
					<a href="<?= $cta_link; ?>"><?= $cta['text']; ?></a>
				<?php } else { ?>
					<span><?php $cta['text']; ?></span>
				<?php } ?>
			</div>
		<?php endif; ?>
	</header>

	<section id="post-<?php the_ID(); ?>" class="event__content">
		<article class="event__content-inner">
			<?php the_content(); ?>
		</article>
		<aside class="event__sidebar">

			<?php $meta = milieux_event_meta(); ?>

			<div class="event__sidebar-details flex">
			  <div class="row bottom text-right">
			    <div class="col text-blend address"><?= $meta['address']; ?></div>
			  </div>
			  <div class="row">
			    <div class="col text-blend month"><?= $meta['month']; ?></div>
			    <div class="col ts-number day"><?= $meta['day']; ?></div>
			  </div>
			</div>
		</aside>
	</section>

</section>
