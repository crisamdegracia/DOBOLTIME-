<?php 

include('functions.php');


//LOGIN 
if(array_key_exists('action' , $_GET) && $_GET['action'] == 'login'){

	$email 		= mysqli_real_escape_string($link,$_POST['email']);
	$password = mysqli_real_escape_string($link,$_POST['password']);
	$login 		= mysqli_real_escape_string($link,$_POST['login']);
	$err	 		=  '';

	if(!$email){

		$err .= '<p class="m-0"> Email required </p>';
	}
	if(!$password){
		$err .= '<p class="m-0"> Password required. </p>';
	}
	if($err){
		echo $err;
	} else {


		//LOGIN
		if($login == '1'){

			$query = "SELECT * FROM users WHERE email = '".$email."' " ;
			$result = mysqli_query($link, $query);
			$row = mysqli_fetch_assoc($result);

			if( mysqli_num_rows($result) > 0 && password_verify($password , $row['password'] ) ){

				$_SESSION['id'] = $row['id'];
				echo '1';

			} else {
				echo 'Email or password is incorrect';
			} 
		}

		/*REGISTER*/
		else if($login == '0'){

			$query = "SELECT * FROM users WHERE email = '".$email."' " ;
			$result = mysqli_query($link, $query);
			$row = mysqli_fetch_assoc($result);

			if( mysqli_num_rows($result) > 0 ) { 

				echo 'email already taken';



				/*REGISTER*/
			} else {
				$hash = password_hash($password , PASSWORD_DEFAULT);
				$query = "INSERT INTO users (`email`,`password`) VALUES( '".$email."' , '".$hash."') ";
				if ($result = mysqli_query($link , $query ) ){

					$_SESSION['id'] =  mysqli_insert_id($link);
					echo '1';
				} else {
					echo 'Couldn&#39t signed up';		
				}

			} 


		} else {
			echo $err;
		} 

	}



}/*LOGIN*/




/*FOLLOWUNG BUTTON*/

if(array_key_exists('action' , $_GET) && $_GET['action'] == 'following') {

	$user 				= mysqli_real_escape_string($link, $_SESSION['id']);
	$userFollower = mysqli_real_escape_string($link, $_POST['followerid']);

	$query = "SELECT * FROM following WHERE follower=".$user." AND isFollowing = ".$userFollower." ";
	$result = mysqli_query($link, $query);

	
	//if follow button has a follower
	if(mysqli_num_rows($result) > 0 ){
		
		$query = "DELETE FROM `following` WHERE follower=".$user." AND isFollowing=".$userFollower." ";
		
		
		//UNFOLLOW
		if( mysqli_query($link, $query) )	echo "1";
		
		//error unfollowed	
		else echo 'error';
		
	
		//then insert the id of current user 
	} else {
		
	 $query = "INSERT INTO `following`(`follower`, `isFollowing`) VALUES ($user, $userFollower) ";
		
		//if inserting new user is a success
		if( mysqli_query($link, $query))echo '2';
		
		//else error
		else  echo 'Error Can&#39t follow this time';

	}



}




/*POSTING A TWEET!*/
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