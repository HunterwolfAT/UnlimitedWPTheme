<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Nov 08 2017 20:34:07 GMT+0000 (UTC)  -->
<html data-wf-page="59b6c85412876200010d8626" data-wf-site="59a5b542c872a70001d2bc9e" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="https://unlimitedammo.de/wp-content/themes/UA-html5blank/custom-assets/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="https://unlimitedammo.de/wp-content/themes/UA-html5blank/custom-assets/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="https://unlimitedammo.de/wp-content/themes/UA-html5blank/custom-assets/css/unlimited-ammo.webflow.css" rel="stylesheet" type="text/css">
	<link href="https://unlimitedammo.de/wp-content/themes/UA-html5blank/custom-assets/css/additional-webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  
	<script>
    function bk_keepRatio() {
    	var wbox = $('.ua-thumbnail-image-wrapper').width();
    	// wbox = 16
    	// height = 9
    	// height = wbox*9/16
    	$('.ua-thumbnail-image-wrapper').css({
    		'height' : wbox*9/16
    	});
    }
  
    $(document).ready(function() {
    	bk_keepRatio();
    	$(window).resize(function() {
    		bk_keepRatio();
    	});
      
    });
  
 </script>
	
<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
</head>

<body class="body">

	<?php
$unlimiteduser = get_the_author();
$unlimitedid = get_the_author_meta('ID');
	?>


<?php if (is_front_page() || is_home()) { ?>
	
	<div class="ua-header-intro">
    <div class="grid-base ua-logo">
			<a class="ua-homelink home" href="<?php echo home_url(); ?>">&nbsp;</a>
		
      <div class="ua-nav w-nav" data-animation="default" data-collapse="medium" data-duration="400">
        <nav class="nav-menu w-clearfix w-nav-menu" role="navigation">
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>">Home</a>
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>/tag/podcast">Podcast</a>
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>/category/videospiele">Videospiele</a>
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>/category/anime">Anime & Manga</a>
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>/category/filme">Filme & Serien</a>
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>/category/sonstiges">Sonstiges</a>
			<a class="nav-link w-nav-link" href="https://discord.gg/5hH4VxW"><img src="https://unlimitedammo.de/wp-content/themes/UA-html5blank/custom-assets/images/discord-white.png" width="24px"/></a>
			<div class="form-block w-form">
            <form class="ua-nav-searchform w-clearfix" method="get" action="<?php echo home_url(); ?>" role="search">
				<label class="ua-nav-searchlabel w-hidden-medium w-hidden-small w-hidden-tiny" data-ix="searchfield-appear" for="search"></label>
              <div class="ua-nav-searchitems w-clearfix">
				  <input class="ua-nav-searchfield w-input" data-name="search" id="search" maxlength="256" name="s" placeholder="Suche" type="search">
				  
				  <button class="ua-nav-searchbutton w-button" type="submit" role="button"></button>
				</div>
            </form>
            
          </div>
			
        </nav>
        <div class="menu-button w-nav-button">
          <div class="ua-burger w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div>


  <?php } else { ?>

<div class="header-detail">
    <div class="div-block-36">
      <div class="grid-base ua-logo">
		  <a class="ua-homelink" href="<?php echo home_url(); ?>">&nbsp;</a>
		  
      	<div class="ua-nav w-nav" data-animation="default" data-collapse="medium" data-duration="400">
	  <nav class="nav-menu w-clearfix w-nav-menu" role="navigation">
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>">Home</a>
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>/tag/podcast">Podcast</a>
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>/category/videospiele">Videospiele</a>
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>/category/anime">Anime & Manga</a>
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>/category/filme">Filme & Serien</a>
			<a class="nav-link w-nav-link" href="<?php echo home_url(); ?>/category/sonstiges">Sonstiges</a>
			<a class="nav-link w-nav-link" href="https://discord.gg/5hH4VxW"><img src="https://unlimitedammo.de/wp-content/themes/UA-html5blank/custom-assets/images/discord-white.png" width="24px"/></a>
			  <div class="form-block">
            <form class="ua-nav-searchform w-clearfix" method="get" action="<?php echo home_url(); ?>" role="search">
				<label class="ua-nav-searchlabel w-hidden-medium w-hidden-small w-hidden-tiny" data-ix="searchfield-appear" for="search"></label>
              <div class="ua-nav-searchitems w-clearfix">
				  <input class="ua-nav-searchfield w-input" data-name="search" id="search" maxlength="256" name="s" placeholder="Suche" type="search">
				  
				  <button class="ua-nav-searchbutton w-button" type="submit" role="button"></button>
				</div>
            </form>
            
          </div>
			  
			</nav>
          <div class="menu-button w-nav-button">
            <div class="ua-burger w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php } ?>
