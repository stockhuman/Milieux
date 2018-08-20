<?php get_header(); ?>

  <div class="container">
    <main id="main" class="page" role="main">

  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php get_template_part( 'parts/loop', 'page' ); ?>

    <?php endwhile; endif; ?>

  	</main> <!-- end #main -->

  </div>


<?php get_footer(); ?>
