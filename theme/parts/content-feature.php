<div class="feature__featured-image">
	<?= milieux_featured_image(); ?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">
		<h1 class="article-title"><?php the_title(); ?></h1>
	</header>

   <section class="feature__content" itemprop="articleBody">
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">

	</footer>

</article>