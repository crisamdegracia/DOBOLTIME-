<?php
session_start();
$link = mysqli_connect('localhost' , 'root' , '', 'users');

if(mysqli_connect_errno($link)){
	die('SERVER FUCKED!');
	exit();

} 
if(  array_key_exists('function' , $_GET) == 'logout' ) {
	session_unset();
	$_SESSION['id'] = '';
}



function time_since($since) {
	$chunks = array(
		array(60 * 60 * 24 * 365 , 'year'),
		array(60 * 60 * 24 * 30 , 'month'),
		array(60 * 60 * 24 * 7, 'week'),
		array(60 * 60 * 24 , 'day'),
		array(60 * 60 , 'hour'),
		array(60 , 'minute'),
		array(1 , 'second')
	);

	for ($i = 0, $j = count($chunks); $i < $j; $i++) {
		$seconds = $chunks[$i][0];
		$name = $chunks[$i][1];
		if (($count = floor($since / $seconds)) != 0) {
			break;
		}
	}

	$print = ($count == 1) ? '1 '.$name : "$count {$name}s";
	return $print;
}




function displayTweets($type){

	//global $link for accessing the outside variable 
	global $link;

	if ($type == 'public') {
		$whereClause = '';

		//IF WE ARE ON THE TIMELINE
	} else if ($type == 'isFollowing') {


		//check the isFollowing table for the id's  users that our users is following 


		// Check only if our user is the current user
		$query = "SELECT * FROM isfollowing WHERE follower='".mysqli_real_escape_string($link, $_SESSION['id'])."' ";

		$result = mysqli_query($link,$query);

		$whereClause = '';

		while ( $row = mysqli_fetch_assoc($result)){

			//DKO MAINTINDIHAN TONG WHERECLAUSE VAR na to talga potaena eee .. pero teka ikoment ko
			//CONNECTED sya dun sa baba
			if( $whereClause == '') $whereClause = " WHERE";
			else { $whereClause .= " OR"; }
			$whereClause .=" userid=" .$row['isFollowing'];





		}



	}

	//CONNECTED DITO UNG WHERE CLAUSE EE
	$query = "SELECT * FROM `tweets` ".$whereClause." ORDER BY `datetime` DESC LIMIT 10";
	$result = mysqli_query( $link , $query);

	if( mysqli_num_rows($result) == 0 ){

		echo 'There arre no tweets to display';



		//DISPLAYING ALL THE TWEETS 
	} else {

		while($row = mysqli_fetch_assoc($result)){

			$userQuery = "SELECT * FROM `users` WHERE id = '".mysqli_real_escape_string($link, $row['userid'])."' LIMIT 1 ";
			$userQueryResult = mysqli_query($link, $userQuery);
			$user = mysqli_fetch_assoc($userQueryResult);



			//Tweet Container and User Email and time stamp 
			echo '<div class="container m-1" id="tweets" style="border: 1px solid #ccc"> <p>'.$user['email']."<span class='text-muted'> &#9679  ".time_since( time() - strtotime($row['datetime']) ).'</span></p>';

			//Tweet content
			echo $row['tweet'].'<br> ';

			//Following button
			echo '<p> <a class="toggleFollow text-info"  data-userid="'.$row['userid'].'">';

			
			//We check if the following button is followed by the user or what 
			//Follower is the current user the one who is logged in
			//isFollowing the owner of the post
			$isFollowingQuery = "SELECT * FROM isfollowing WHERE follower='".mysqli_real_escape_string($link, $_SESSION['id'])."' AND isFollowing='".mysqli_real_escape_string($link, $row['userid'])."'  ";

			$isFollowingQueryResult = mysqli_query($link,$isFollowingQuery);


			if(mysqli_num_rows($isFollowingQueryResult) > 0 ){
				echo "unfollow";
				

			} else{echo "follow"; }
			echo '</a></p></div>'; 
		}
	}

	function displaySearch(){

		//display search box
		echo "<form class='form-group'> <input class='form-control' placeholder='Search Tweets' > 
		<input class='btn btn-success' type='submit' value='Go!'> </form> ";

	}

	function displayTweetBox(){


		//If there is an active user then display the tweet box
		if($_SESSION['id'] > 0 ){
			echo "<form class='form-group my-3'>
		  <textarea class='form-control' placeholder='What&#39s on your mind?'></textarea>
		 <input class='btn btn-success mt-1' type='submit'  value='Post Tweet'>  </form>";
		}
	}


}
?>