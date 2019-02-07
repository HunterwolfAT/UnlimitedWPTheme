<?php get_header(); ?>


	<div class="ua-section-heading">
		<div class="grid-base w-clearfix">
			<h1 class="headline-main">Newest</h1>
			<h1 class="headline-main headline-main-sub">Videos</h1><a target="_blank" href="<?php echo ($rss2_url = get_bloginfo_rss('rss2_url')); ?>" class="ua-section-interface w-button"></a>
		</div>
	</div>

	<div class="ua-new-teaser-desktop w-hidden-medium w-hidden-small w-hidden-tiny">
		<div class="ua-teaser-flex w-clearfix">
			
			<?php $query1 = new WP_Query( array( 'post_type' => 'post' ) ); ?>
			<?php if ($query1->have_posts()): while ($query1->have_posts()) : $query1->the_post(); ?>

				<div data-ix="ua-thumbnai-overview-animation" class="ua-thumbnail-overview">
					<a href="<?php the_permalink(); ?>" class="">
						<div class="ar_container">
							<div class="ar_dummy"></div>
							<div class="ar_content ua-thumbnail-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">&nbsp;</div>
						</div>
						
						<!--img src="" sizes="(max-width: 991px) 100vw, (max-width: 4129px) 31vw, 1280px" class="ua-thumbnail-image"-->
						<div class="ua-thumbnail-desc">
							<div class="ua-thumbnail-title"><?php the_title(); ?></div>
						</div>
							
					</a>
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="ua-thumbnail-author w-clearfix w-inline-block">
						<img src="<?php echo get_small_avatar_url(get_the_author_meta('ID')); ?>" class="ua-thumbnail-author-image">
						<div class="ua-thumbnail-author-name"><?php the_author(); ?></div>
					</a>
				</div>

			<?php endwhile; ?>
			
			<?php wp_reset_postdata(); ?>
			
			<?php endif; ?>


		</div>
	</div>



<div class="ua-new-teaser-mobile w-hidden-main">
    <div class="ua-teaser-flex w-clearfix">
		
		
			<?php if ($query1->have_posts()): while ($query1->have_posts()) : $query1->the_post(); ?>      
		
		<div class="ua-thumbnail-overview"><a href="<?php the_permalink(); ?>" class=""><div class="ar_container">
							<div class="ar_dummy"></div>
							<div class="ar_content ua-thumbnail-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">&nbsp;</div>
						</div></a>
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="ua-thumbnail-author w-clearfix w-inline-block">
				
				<img src="<?php echo get_small_avatar_url(get_the_author_meta('ID')); ?>" class="ua-thumbnail-author-image">
				<div class="ua-thumbnail-author-name"><?php the_author(); ?></div></a>
        <a href="<?php the_permalink(); ?>" class="w-inline-block">
          <div class="ua-thumbnail-desc">
            <div class="ua-thumbnail-title"><?php the_title(); ?></div>
          </div>
        </a>
      </div>
		
		<?php endwhile; ?>
			
			<?php wp_reset_postdata(); ?>
			
			<?php endif; ?>
		
      
    </div>
  </div>


<div class="ua-new-teaser-desktop ut-podcast-teaser">
<div class="container-6 w-container"> 

					<a href="<?php echo home_url(); ?>/category/videos/" class="link-block w-clearfix w-inline-block">
        				<div class="text-block-11">Mehr</div>
				        <div class="text-block-12"></div>
					</a>
    			</div></div>


	<div class="ua-section-heading">
    <div class="grid-base w-clearfix">
      <h1 class="headline-main">Unlimited</h1>
      <h1 class="headline-main headline-main-sub">Podcasts</h1><a target="_blank" href="https://itunes.apple.com/de/podcast/unlimited-topic/id1257896606?mt=2" class="itunes ua-section-interface w-button"></a><a target="_blank" href="https://unlimitedammo.de/feed/mp3/" class="ua-section-interface w-button"></a></div>
  </div>
		
		
		<div class="ua-new-teaser-desktop ut-podcast-teaser">
    <div class="grid-base">
      <div class="ut-overview-frame">
        <div class="ut-video-frame">
			
			<?php $i = 0; ?>
			
			<?php $query2 = new WP_Query( array( 'post_type' => 'podcast', 'posts_per_page' => 5 ) ); ?>
			
			<?php if ($query2->have_posts()): while ($query2->have_posts()) : $query2->the_post(); ?>
			
			<?php $i++ ?>
			
			<?php if ($i == 1) { ?>
			
			<div class="section">
    <div class="ua-container-typography w-container">
      <a href="<?php the_permalink(); ?>" class=""><h1 class="detail-headline"><?php the_title(); ?></h1></a>
		
		<div class="ar_container">
							<div class="ar_dummy"></div>
							<div class="ar_content ua-thumbnail-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">&nbsp;</div>
						</div>
      
		<div class="detail-paragraph">
				<?php the_content(); ?>
		</div>
      
      <div class="ua-taglist">
		<?php the_tags( '<ul><li class="ua-tag w-inline-block">', '', '</li></ul>' ); ?>  
     </div>
		
		
    </div>
  </div>
				
		  </div>
			
		  
		  
		<div class="w-container">
          <div class="div-block-35 w-clearfix w-hidden-small w-hidden-tiny">
            <div class="text-block-7"></div><h1 class="headline-further">Weitere Folgen:</h1>
          </div>
        </div>
			<div class="contain container w-container">
			
			<?php } else { ?>
			
			<div data-ix="ut-thumbnail-overiew-animation" class="ut-thumbnail-overview"><a href="<?php the_permalink(); ?>" class="w-inline-block"><img src="<?php the_post_thumbnail_url(); ?>" class="ua-thumbnail-image"><div class="ut-thumbnail-desc"><div class="ua-thumbnail-title"><?php the_title(); ?></div></div></a></div>
			
			
			
			<?php }; ?>

			<?php endwhile; ?>
			
			<?php wp_reset_postdata(); ?>
			

			<?php endif; ?>
			
			</div>
			        </div>
      </div>
			
			
			<div class="container-6 w-container"> 
					<!-- Special Podcast Pagination -->
 					<?php //podcast_pagination( ); ?>
					<a href="<?php echo home_url(); ?>/tag/podcast/" class="link-block w-clearfix w-inline-block">
        				<div class="text-block-11">Mehr</div>
				        <div class="text-block-12"></div>
					</a>
    			</div>


  </div>




  <div class="ua-section-heading">
    <div class="grid-base w-clearfix">
      <h1 class="headline-main">Unlimited</h1>
      <h1 class="headline-main headline-main-sub">Team</h1><a href="<?php echo ($rss2_url = get_bloginfo_rss('rss2_url')); ?>" class="ua-section-interface w-button"></a></div>
  </div>
 
  <div id="team" class="ua-team-overview">
    <div class="grid-base ua-team">

	<?php contributors(); ?>

	<!--a href="#" class="ua-team-item w-inline-block">
		<img src="images/photo1_2.jpg" class="image-24">
		<div class="ua-team-desc">
			<div class="text-block-9">TeleDude</div>
			<div class="text-block-10">Profinerd und Science Fiction Philosoph, Heavy Metal Connoisseur und Comicfan.</div>
		</div>
	</a-->
      
    </div>
  </div>

<?php get_footer(); ?>
