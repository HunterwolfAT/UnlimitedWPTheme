<?php get_header(); ?>

<?php
	$youtube = get_field( 'youtubeurl' );
	$findme = '=';
	$pos = strpos($youtube, $findme);
	$realpos = $pos +1;

	$youtubeID = substr($youtube, $realpos);

	$posttype = get_post_type();
?>

<?php if (!is_paged()) { ?>

	<?php $i = 0; ?>

	<?php $queryautor = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 11, 'author' => get_the_author_meta('ID')) ); ?>
	<?php if ($queryautor->have_posts()): while ($queryautor->have_posts()) : $queryautor->the_post(); ?>

	<?php $i++ ?>

	<?php if ($i == 1) { ?>

		<div class="ua-profile-header" style="background-image:url(<?php include 'socialmediaheader.php'; ?>)"></div>

		<div class="section-7">
			<div class="container-4 w-container">
				<div class="div-block-42"><img src="<?php echo get_pure_avatar_url(get_the_author_meta('ID')); ?>" class="image-25">
					<h1 class="detail-headline profile"><?php the_author(); ?></h1>
					<h2 class="detail-subheadline profile"><?php echo wpautop( get_the_author_meta('description') ); ?></h2>
				</div>

				<div class="social-buttons w-clearfix" style="text-align: center !important; float: none;">
					<!-- PAGINANATION HERE -->
				</div>
			</div>
		</div>

		<script src="https://unlimitedammo.de/wp-content/themes/UA-html5blank/js/cookiesfunctions.js"></script>

		<script>
			window.onload = function() {
				// Get rid of "no javascript" message
				$("div").remove(".nojavascript");

				// Check if cookie to show youtube embedd is set
				var youtubeEnabled = getCookie('UnlimitedAmmoYouTubeCookies');
				if (youtubeEnabled)
					showVideo();
				else
					showWarning();
			}
			function openYouTubeLink() {
				var youtubeid = <?php echo json_encode($youtubeID, JSON_HEX_TAG) ?>;
			    window.open("https://www.youtube.com/watch?v=" + youtubeid,"_self");
			}
			function agreeToYouTubeTracking() {
			    setCookie('UnlimitedAmmoYouTubeCookies','true',30);
			    showVideo();
			}
			function showWarning() {
				$(".ua-video").prepend("<div class=\"ua-modal detail-paragraph warning\"><b>Videos auf Unlimited Ammo sind via YouTube eingebettet.</b></br>Klickst du hier auf ein Video, werden YouTube's Cookies gesetzt und YouTube kann dich auf Unlimited Ammo nachverfolgen.</br>Mehr auf <a href=\"https://unlimitedammo.de/datenschutzerklarung/\">unserer Datenschutzerkl&auml;rung</a></br><a href=\"#\" onclick=\"openYouTubeLink()\">> Video direkt auf YouTube ansehen</a></br><a href=\"\" onclick=\"agreeToYouTubeTracking()\">> Cookies akzeptieren und (via ein Cookie von uns) f&uuml;r 30 Tage merken</a></div></div>");
			}
			function showVideo() {
			    $("div").remove(".warning");
			    $("div").remove(".featuredimage");
			    $(".ua-video").append("<div rel=\"0\" showinfo=\"0\" style=\"padding-top:56.17021276595745%\" class=\"video w-embed w-video\"><iframe class=\"embedly-embed\" src=\"https://www.youtube-nocookie.com/embed/<?php echo $youtubeID; ?>?rel=0&amp;showinfo=0\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"\"></iframe></div>");
			};
		</script>

		<div class="section-5">
			<div class="div-block ua-video">
			    <noscript>
				<div class="ua-modal nojavascript">
				<div class="detail-paragraph">
				    Hey, ein Internetbewusster User, wie schön!</b>
				    Hier ist der Link zum Video, klopf ihn in VLC oder so rein:</br>
				    <a href="https://www.youtube.com/watch?v=<?php echo $youtubeID; ?>">https://www.youtube.com/watch?v=<?php echo $youtubeID; ?></a></br>
				    Wenn du wie die anderen Sterblichen das Video eingebettet gucken willst, dann erlaube Javascript!
				</div>
				</div>
			    </noscript>
			<div class="featuredimage ua-thumbnail-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="ua-container-typography w-container">
				<h1 class="detail-headline"><?php the_title(); ?></h1>
				<div class="ua-social-big w-clearfix">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="author-button w-clearfix w-inline-block"><img src="<?php echo get_small_avatar_url(get_the_author_meta('ID')); ?>" width="40" class="author-button-avatar">
						<div class="author-button-name"><?php the_author(); ?></div>
						<div class="author-button-icon"></div>
					</a>
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

		<div class="section-6" id="morevideos">
    		<div class="w-container">
      			<div class="div-block-38">
					<h1 class="headline-main">Mehr von </h1>
					<h1 class="headline-main headline-main-sub"><?php the_author(); ?></h1>
			  	</div>
    		</div>
			
    	<div class="contain container w-container">

	<?php } else { ?>
			
		<div data-ix="ut-thumbnail-overiew-animation" class="ut-thumbnail-overview"><a href="<?php the_permalink(); ?>" class="">
			<div class="ar_container">
				<div class="ar_dummy"></div>
				<div class="ar_content ua-thumbnail-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">&nbsp;</div>
			</div>
		<div class="ut-thumbnail-desc"><div class="ua-thumbnail-title"><?php the_title(); ?></div></div></a></div>
			
	<?php }; ?>
			
			
	<?php endwhile; ?><?php wp_reset_postdata(); ?>
			
			</div>
		 
		<div class="container-6 w-container">
 					<?php html5wp_pagination(); ?>
	    </div>
			
	</div>
	
	<?php endif; ?>

		
<?php } else { ?>

<div class="section-6">
    		<div class="w-container">
      			<div class="div-block-38">
					<h1 class="headline-main">Mehr von </h1>
					<h1 class="headline-main headline-main-sub"><?php the_author(); ?></h1>
			  	</div>
    		</div>
			
    	<div class="contain container w-container">
		
			
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					
			
			<div data-ix="ut-thumbnail-overiew-animation" class="ut-thumbnail-overview"><a href="<?php the_permalink(); ?>" class="">
				<div class="ar_container">
						<div class="ar_dummy"></div>
						<div class="ar_content ua-thumbnail-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">&nbsp;</div>
					</div>
				<div class="ut-thumbnail-desc"><div class="ua-thumbnail-title"><?php the_title(); ?></div></div></a></div>

			<?php endwhile; ?><?php wp_reset_postdata(); ?>
			
			</div>
		 
		<div class="container-6 w-container">
 					<?php html5wp_pagination(); ?>
	    </div>
			
	</div>
			
			
				
			<?php endif; ?>
		
		
		
	<?php }; ?>
			
	
      
    	

<?php if (!is_paged()) { ?>
<!--
<div class="section-8">
	<div class="container-5 w-container">
        	<script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		<div class="w-embed w-script">
			<a class="twitter-timeline" href="<?php include 'socialtwitter.php'; ?>" data-tweet-limit="3" data-theme="dark" data-chrome="transparent nofooter"></a>
      		</div>
    	</div>
</div>
-->
<?php }; ?>

<?php get_footer(); ?>
