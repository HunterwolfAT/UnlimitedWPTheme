<?php get_header(); ?>


<?php
	$youtube = get_field( 'youtubeurl' );
	$findme = '=';
	$pos = strpos($youtube, $findme);
	$realpos = $pos +1;

	$youtubeID = substr($youtube, $realpos);

	$posttype = get_post_type();

	
?>

<!-- Wenn Post -->
<?php // echo $posttype; ?>

<?php if ( $posttype == 'post') { ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>






<div class="section-5">
    <div class="div-block ua-video">
      <div rel="0" showinfo="0" style="padding-top:56.17021276595745%" class="video w-embed w-video"><iframe class="embedly-embed" src="https://www.youtube.com/embed/<?php echo $youtubeID; ?>?rel=0&amp;showinfo=0" scrolling="no" frameborder="0" allowfullscreen=""></iframe></div>
    </div>
  </div>

<div class="section">
    <div class="ua-container-typography w-container">
      <h1 class="detail-headline"><?php the_title(); ?></h1>
      <div class="ua-social-big w-clearfix"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="author-button w-clearfix w-inline-block"><img src="<?php echo get_small_avatar_url(get_the_author_meta('ID')); ?>" width="40" class="author-button-avatar">
		  <div class="author-button-name"><?php the_author(); ?></div><div class="author-button-icon"></div></a>
        <div class="social-buttons w-clearfix">
          <?php include 'socialmedialinks.php'; ?>
        </div>
      </div>
		<div class="detail-paragraph">
				<?php the_content(); ?>
		</div>
      
      <div class="ua-taglist">
		<?php the_tags( '<ul><li class="ua-tag w-inline-block">', '', '</li></ul>' ); ?>  
     </div>
		
		
    </div>
  </div>



	 <div class="section-6">
    <div class="w-container">
      <div class="div-block-38">
        <h1 class="headline-main">Mehr von</h1>
        <h1 class="headline-main headline-main-sub"> <?php the_author(); ?></h1>
      </div>
    </div>
    <div class="contain container w-container">
		

		
		
		<?php $related = get_posts( array( 'author' => get_the_author_meta( 'ID' ), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post);
					
					include 'furthervideos.php';
					
					
				} wp_reset_postdata(); ?>
		
      
      
    </div>
		 
		 <div class="container-6 w-container">
      <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>#morevideos" class="link-block w-clearfix w-inline-block" target="_blank">
        <div class="text-block-11">Mehr</div>
        <div class="text-block-12"></div>
      </a>
    </div>
		 
  </div>



<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>



	<?php endif; ?>





<!-- Wenn Podcast -->

<?php //} elseif ( $posttype == 'podcast') { ?>
<?php } else { ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!--div class="section-5 podcast-header" >
    <div class="div-block ua-video " style="background-image: url(<?php the_post_thumbnail_url(); ?>) !important; background-size: contain; ">
      <div rel="0" showinfo="0" style="padding-top:56.17021276595745%" class="video w-embed w-video " ></div>
    </div>
  </div-->

<div class="ua-section-heading" style="background-color: rgba(255,255,255,0.04)">
    <div class="grid-base w-clearfix">
      <h1 class="headline-main">Unlimited</h1>
      <h1 class="headline-main headline-main-sub">Podcasts</h1><a target="_blank" href="https://itunes.apple.com/de/podcast/unlimited-topic/id1257896606?mt=2" class="itunes ua-section-interface w-button"></a><a target="_blank" href="https://open.spotify.com/show/137g494ITmkWJfYtvYAg5n" class="itunes ua-section-interface w-button"></a><a target="_blank" href="https://unlimitedammo.de/feed/mp3/" class="ua-section-interface w-button"></a></div>
  </div>

<div class="section">
    <div class="ua-container-typography w-container">
      <h1 class="detail-headline"><?php the_title(); ?></h1>
		
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



	 



<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

<?php endif; ?>


<div class="section-6">
    <div class="w-container">
      <div class="div-block-38">
        <h1 class="headline-main">Mehr von</h1>
        <h1 class="headline-main headline-main-sub"> <?php the_author(); ?></h1>
      </div>
    </div>
    <div class="contain container w-container">
		

		
		<?php $query2 = new WP_Query( array( 'post_type' => 'podcast', 'posts_per_page' => 4 ) ); ?>
			
			<?php if ($query2->have_posts()): while ($query2->have_posts()) : $query2->the_post(); ?>
		
		
					
					<?php include 'furthervideos.php'; ?>
					
					
		<?php endwhile; ?>
			
			<?php wp_reset_postdata(); ?>
			

			<?php endif; ?>
		
      
      
    </div>
		 
		 <div class="container-6 w-container">
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
 
  <div class="ua-team-overview">
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
	



<?php } ?>





<?php get_footer(); ?>
