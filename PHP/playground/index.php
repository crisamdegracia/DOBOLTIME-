<?php 

include('functions.php');
include('views/header.php') ;


if (array_key_exists('page' , $_GET)  && $_GET['page'] == 'timeline' ) {

	include('views/timeline.php') ;
} else if(array_key_exists('page' , $_GET)  && $_GET['page'] == 'mytweets' ) {

	include('views/mytweets.php') ;
} else if(array_key_exists('page' , $_GET)  && $_GET['page'] == 'publicprofiles' ) {

	include('views/publicprofiles.php') ;
} else {
	include('views/home.php');
}



include('views/footer.php');


?>