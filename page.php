<?php

/* Template name: Terms */

get_header(); ?>
	<div id="primary" class="content-area regular-page">
		<div class="container">
			<div class="heading"><h3><?php the_title(); ?></h3></div>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div><!-- container -->
	</div><!-- #primary -->
<?php
get_footer();
