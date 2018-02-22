<?php

include('functions.php');

include('views/header.php');

//TIMELINE
if( array_key_exists('page' ,$_GET) == 'timeline' && $_GET['page'] == 'timeline'){
	include ('views/timeline.php');
	
	
	//MY TWEETS
} else if(array_key_exists('page' ,$_GET) == 'tweets' && $_GET['page'] == 'tweets') {

	include('views/yourtweets.php');
	
	//PUBLIC PROFILES
} else if(array_key_exists('page' ,$_GET) == 'public' && $_GET['page'] == 'public') { 
	include('views/publicprofile.php');
	
	//SEARCH BOX
} else if(array_key_exists('page' ,$_GET) == 'search' && $_GET['page'] == 'search') { 
	include('views/search.php');
	
	
} else if(array_key_exists('userid' ,$_GET)  && $_GET['userid'] > 0 ){
	
	
//	$_GET['impakto'] = $_GET['userid'];
	include('views/publicprofile.php');
	
 } 


else {

	include('views/home.php');
}

include('views/footer.php');


?>