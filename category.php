<?php get_header(); ?>



<div class="ua-section-heading">
    <div class="grid-base w-clearfix">
      <h1 class="headline-main"><?php _e( 'Alle Beiträge für ', 'html5blank' ); ?></h1>
      <h1 class="headline-main headline-main-sub"><?php single_cat_title(); ?></h1>
	</div>
  </div>
		
		
		<div class="ua-new-teaser-desktop ut-podcast-teaser">
    <div class="grid-base">
      <div class="ut-overview-frame">
        
			
			<div class="contain container w-container">
		
			
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			
			
			<div data-ix="ut-thumbnail-overiew-animation" class="ut-thumbnail-overview"><a href="<?php the_permalink(); ?>" class="">
				<div class="ar_container">
							<div class="ar_dummy"></div>
							<div class="ar_content ua-thumbnail-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">&nbsp;</div>
						</div>
				<div class="ut-thumbnail-desc"><div class="ua-thumbnail-title"><?php the_title(); ?></div></div></a></div>
			
			
			
			

			<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>
						
			<?php endif; ?>
			
			</div>
			        </div>
      </div>
			
			
			<div class="container-6 w-container">
 					<?php html5wp_pagination(); ?>
		    </div>
    </div>


  </div>

	


<?php get_footer(); ?>
