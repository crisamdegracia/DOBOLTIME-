<?php 

include('functions.php');

include('views/header.php') ;


 if(array_key_exists('page' , $_GET) && $_GET['page'] == 'loadmore'){ 

		print_r($_POST);

	} 

else if (array_key_exists('page' , $_GET)  && $_GET['page'] == 'timeline' ) {

	include('views/timeline.php') ;
} else if(array_key_exists('page' , $_GET)  && $_GET['page'] == 'mytweets' ) {

	include('views/mytweets.php') ;
} else if(array_key_exists('page' , $_GET)  && $_GET['page'] == 'publicprofiles' ) {

	include('views/publicprofiles.php') ;
	
}  else if(array_key_exists('userid' ,$_GET)  && $_GET['userid'] > 0 ){
	 
	include('views/publicprofiles.php') ;
	
}   else if(array_key_exists('page' ,$_GET)  && $_GET['page'] == 'search' ){

	include('views/search.php');
} 
 
//$_GET['loadmore'] = (isset($_GET['loadmore'])) ? $_GET['loadmore'] : 3; 

 




else {
	include('views/home.php');
}

include('views/footer.php');



?>