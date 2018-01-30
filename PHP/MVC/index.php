<?php

include('functions.php');

include('views/header.php');

if( array_key_exists('page' ,$_GET) == 'timeline'){
	include ('views/timeline.php');
} else {

	include('views/home.php');
}

include('views/footer.php');


?>