<?php



if(array_key_exists('action' , $_GET) && $_GET['action'] == 'following') {
	
	$user 				= mysqli_real_escape_string($link, $_SESSION['id']);
	$userFollower = mysqli_real_escape_string($link, $_POST['followerid']);

	$query = "SELECT * FROM following WHERE follower=".$user." AND isFollowing = ".$userFollower." ";
	$result = mysqli_query($link, $query);
	$followingRow = mysqli_fetch_assoc($result);

	//if follow button has a follower
	if(mysqli_num_rows($result) > 0 ){

		$query = "DELETE FROM `following` WHERE follower=".$user." AND isFollowing=".$userFollower." ";


		//UNFOLLOW
		if( mysqli_query($link, $query) )	echo "1";

		//error unfollowed	
		else echo 'error';


		//then insert the id of current user 
	} else if ( $_SESSION['id'] == $followingRow['userid'] ) {

			//Sets value for me if the current user is the session id
			if( $_SESSION['id'] == $row['userid'] ){
				echo '3';
			} else {
				echo 'error';
			} 
		}

		else {

			$query = "INSERT INTO `following`(`follower`, `isFollowing`) VALUES ($user, $userFollower) ";

			//if inserting new user is a success
			if( mysqli_query($link, $query))echo '2';

			//else error
			else  echo 'Error Can&#39t follow this time';

		}



	}









?>