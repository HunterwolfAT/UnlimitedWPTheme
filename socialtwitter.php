<?php 

$unlimiteduser = get_the_author();
$unlimitedid = get_the_author_meta('ID');

switch ($unlimiteduser) {
		
	case "Baka Critic":
		
        echo 'https://twitter.com/89Takezo';
			break;
		
	case "SpeckObst":
		
        echo 'https://twitter.com/SpeckObst';
        
		break;
		
	case "Gamesground":
		
        echo 'https://twitter.com/jogel19';
        
		break;
		
	case "Gescheit Gespielt":
		
        echo 'https://twitter.com/HunterwolfAT';
        
		break;
		
    case "AuBanan!":
		
        echo 'https://twitter.com/Schlabbermull';
        
		break;
		
    case "Maxi":
		
        echo 'https://twitter.com/finalstageshow';
        
		break;
		
    case "Michael":
		
        echo 'https://twitter.com/ThanerosFactory';
        
		break;
		
    case "TeleDude":
		
        echo 'https://twitter.com/TeleDude';
        
		break;
	
		
    case "Tommysomething":
		
        echo 'https://twitter.com/Tommysomething';
        
		break;
}

	
?> 
