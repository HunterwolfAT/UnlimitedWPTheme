<?php get_header(); ?>

	<div class="section" style="padding: 30px 0px !important;">
		<div class="ua-container-typography w-container"> 
			<h1 class="detail-headline"><?php the_title(); ?></h1>
		</div>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div style="background-color: #141618; max-width:100%;">

			<!--p class="detail-paragraph" id="post-<?php the_ID(); ?>"-->
				<div class="ua-container-typography w-container">
					<?php the_content(); ?>
					<br class="clear">
				</div>
			</div>

			<!--/p-->

		<?php endwhile; ?>

		<?php else: ?>

			<h1 class="detail-headline"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>


	</div>


		<?php endif; ?>

<?php get_footer(); ?>
