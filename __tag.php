<?php get_header(); ?>


 <div class="section-6">
    <div class="w-container">
      <div class="div-block-38">
        <h1 class="headline-main">Mehr von </h1>
        <h1 class="headline-main headline-main-sub"><?php echo single_tag_title('', false); ?></h1>
      </div>
    </div>
    <div class="contain container w-container">


		
			
			<?php $query2 = new WP_Query( array( 'post_type' => 'podcast', 'posts_per_page' => 10 ) ); ?>
			
			<?php if ($query2->have_posts()): while ($query2->have_posts()) : $query2->the_post(); ?>
			
			
			
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
		 
		 <div class="container-6 w-container">
       <?php get_template_part('pagination'); ?>
    </div>
		 
  </div>
	


<?php get_footer(); ?>
