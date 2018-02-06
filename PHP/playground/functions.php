<?php 

include('connection.php');


if( array_key_exists('page' , $_GET ) && $_GET['page']  == 'logout' ) {
	session_unset();
}

if(mysqli_error($link)){
	die('SERVER ERROR!');
} 


?>