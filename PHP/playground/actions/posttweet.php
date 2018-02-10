<?php


if(array_key_exists('action' , $_GET) && $_GET['action'] == 'tweetpost'){

	$tweet = mysqli_real_escape_string($link, $_POST['tweet']);

	if(!$tweet) {
		echo 'Your tweet is empty';
	}

	else {
		
		
		$query = "INSERT INTO tweets (`tweet` , `userid` , `datetime`) VALUES (
	'".$tweet."' ,
	'".mysqli_real_escape_string($link, $_SESSION['id'])."' ,
	'".date("Y-m-d H:i:s")."' ) ";

		if(mysqli_query($link, $query)){
			echo '1';
		} 														 
	}

}





?>