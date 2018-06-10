<?php /* Template Name: CustomPageT1 */ ?>

<?php get_header(); ?>




<!-- Wenn Post -->



<?php if (have_posts()): while (have_posts()) : the_post(); ?>




<div class="ua-article">

	
<div class="section-5">
	<div class="div-block ua-article-thumbnail"><img src="<?php the_post_thumbnail_url(); ?>" /></div>
    <!--<div class="div-block ua-video">    </div>-->
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



<?php get_footer(); ?>
