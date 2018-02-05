<?php


if(array_key_exists('action' , $_GET) == 'submit'){
	
	$link = mysqli_connect('localhost', 'root' , '' , 'users');
		
		if(mysqli_errno($link)){
			die('SERVER ERROR');
			exit();
		}
	
	$email = mysqli_real_escape_string($link,$_GET['name']);
	
	$query = 'SELECT * FROM `users`  WHERE email ="'.$email.'" ';
	$result = mysqli_query($link, $query);
	
	if(mysqli_num_rows($result) > 0 ){
		
		echo 'email taken';
	}
	else {
		echo 'Winner!';
	}
}


?>