<?php 

$unlimiteduser = get_the_author();
$unlimitedid = get_the_author_meta('ID');

switch ($unlimiteduser) {
		
	case "Baka Critic":
		
        echo '<a target="_blank" href="https://www.youtube.com/channel/UCBj_zRdJwiXo2n83rw8hbvw" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon youtube"></div>
	<div class="button-text">YouTube</div>
</a>
<a target="_blank" href="https://twitter.com/89Takezo" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon twitter"></div>
	<div class="button-text">Twitter</div>
</a>
<a target="_blank" href="'.get_author_feed_link( $unlimitedid, "" ).'" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon rss"></div>
	<div class="button-text">rss</div>
</a>';
        
		break;
		
	case "Björn":
		
        echo '<a target="_blank" href="https://www.youtube.com/channel/UC6P0k6iVUyvT_8oVwdgidag" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon youtube"></div>
	<div class="button-text">YouTube</div>
</a>
<a target="_blank" href="https://twitter.com/SpeckObst" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon twitter"></div>
	<div class="button-text">Twitter</div>
</a>
<a target="_blank" href="'.get_author_feed_link( $unlimitedid, "" ).'" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon rss"></div>
	<div class="button-text">rss</div>
</a>';
        
		break;
		
	case "Gamesground":
		
        echo '<a target="_blank" href="https://www.youtube.com/channel/UCFquxBWD0TBKeJLELMhNa6w" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon youtube"></div>
	<div class="button-text">YouTube</div>
</a>
<a target="_blank" href="https://twitter.com/jogel19" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon twitter"></div>
	<div class="button-text">Twitter</div>
</a>
<a target="_blank" href="'.get_author_feed_link( $unlimitedid, "" ).'" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon rss"></div>
	<div class="button-text">rss</div>
</a>';
        
		break;
		
	case "Gescheit Gespielt":
		
        echo '<a target="_blank" href="https://www.youtube.com/channel/UCAmaelj22ggPbyck0X93FlA" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon youtube"></div>
	<div class="button-text">YouTube</div>
</a>
<a target="_blank" href="https://twitter.com/HunterwolfAT" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon twitter"></div>
	<div class="button-text">Twitter</div>
</a>
<a target="_blank" href="'.get_author_feed_link( $unlimitedid, "" ).'" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon rss"></div>
	<div class="button-text">rss</div>
</a>';
        
		break;
		
    case "Martin":
		
        echo '<a target="_blank" href="https://www.youtube.com/channel/UC0E-CsUUgPl_3nAtkTSNpCw" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon youtube"></div>
	<div class="button-text">YouTube</div>
</a>
<a target="_blank" href="https://twitter.com/Schlabbermull" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon twitter"></div>
	<div class="button-text">Twitter</div>
</a>
<a target="_blank" href="https://www.patreon.com/aubanan" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon instagram"></div>
	<div class="button-text">Patreon</div>
</a>
<a target="_blank" href="'.get_author_feed_link( $unlimitedid, "" ).'" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon rss"></div>
	<div class="button-text">rss</div>
</a>';
        
		break;
		
    case "Maxi":
		
        echo '<a target="_blank" href="https://www.youtube.com/user/TheFinalStageShow" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon youtube"></div>
	<div class="button-text">YouTube</div>
</a>
<a target="_blank" href="https://twitter.com/finalstageshow" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon twitter"></div>
	<div class="button-text">Twitter</div>
</a>
<a target="_blank" href="https://www.patreon.com/thefinalstageshow" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon instagram"></div>
	<div class="button-text">Patreon</div>
</a>
<a target="_blank" href="'.get_author_feed_link( $unlimitedid, "" ).'" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon rss"></div>
	<div class="button-text">rss</div>
</a>';
        
		break;
		
    case "Michael":
		
        echo '<a target="_blank" href="https://www.youtube.com/user/SomeonesSuicide" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon youtube"></div>
	<div class="button-text">YouTube</div>
</a>
<a target="_blank" href="https://twitter.com/ThanerosFactory" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon twitter"></div>
	<div class="button-text">Twitter</div>
</a>
<a target="_blank" href="'.get_author_feed_link( $unlimitedid, "" ).'" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon rss"></div>
	<div class="button-text">rss</div>
</a>';
        
		break;
		
    case "TeleDude":
		
        echo '<a target="_blank" href="https://www.youtube.com/user/TeleDudes" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon youtube"></div>
	<div class="button-text">YouTube</div>
</a>
<a target="_blank" href="https://twitter.com/TeleDude" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon twitter"></div>
	<div class="button-text">Twitter</div>
</a>
<a target="_blank" href="'.get_author_feed_link( $unlimitedid, "" ).'" class="ua-social-button w-clearfix w-inline-block">
	<div class="button-icon rss"></div>
	<div class="button-text">rss</div>
</a>';
        
		break;
	
		
}

	
?> 