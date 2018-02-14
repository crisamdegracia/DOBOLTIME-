<?php




/*All the functions*/
include('./functions.php');

/*Login and register*/
include('./actions/login.php');

/*FOLLOWUNG BUTTON*/
include('./actions/followbutton.php');

/*POSTING A TWEET!*/
include('./actions/posttweet.php');

 if(array_key_exists('page' , $_GET) && $_GET['page'] == 'loadmore'){ 

		print_r($_POST);

	} 


?>