<?php get_header(); ?>

	<div class="section" style="padding: 30px 0px !important;">
		<div class="ua-container-typography w-container">
			<h1 class="detail-headline"><?php the_title(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!--p class="detail-paragraph" id="post-<?php the_ID(); ?>"-->

				<?php the_content(); ?>
				<br class="clear">

			<!--/p-->

		<?php endwhile; ?>

		<?php else: ?>

			<h1 class="detail-headline"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>


		</div>
	</div>


		<?php endif; ?>

<?php get_footer(); ?>
