<?php
//$_POST['id'] = '';
session_start();
$_GET['functions'] = '';
//$_SESSION['id'] = '';
//$_GET['userid'] = '';
$link = mysqli_connect('localhost' , 'root' , '', 'users');

if(mysqli_connect_errno($link)){
	die('SERVER FUCKED!');
	exit();

} 
if( (array_key_exists('function', $_GET) == 'logout' && $_GET['function'] == 'logout')) {
	session_unset();
	//	unset($_SESSION['id']);
	//	if($_SESSION['id'] == ''){
	//		echo 'buhay pa pucha';
	//	}
} 


function time_since($since) {

	$chunks = array(
		array(60 * 60 * 24 * 365 , 'year ago'),
		array(60 * 60 * 24 * 30 , 'month ago'),
		array(60 * 60 * 24 * 7, 'week ago'),
		array(60 * 60 * 24 , 'day ago'),
		array(60 * 60 , 'hour ago'),
		array(60 , 'minute ago'),
		array(1, 'sec ago')

	);

	for ($i = 0, $j = count($chunks); $i < $j; $i++) {
		$seconds = $chunks[$i][0];
		$name = $chunks[$i][1];
		$count = floor($since / $seconds);
		if ($count != 0) {
			break;
		}
	} 
	//  	$print = ($count == 0) ? 'just now' ;
	//	
	if( $count == 1){
		return $print = '1 '.$name;
	} else if($count  < 1) {
		return	$print = 'just now';
	} else {
		return $print = "$count {$name}" ;
	}


	//		$print = ($count == 1) ? '1 '.$name : "$count {$name}s";
	//		$print = ($count > 0) ? '1 '.$name : "just now";
	//	return $print;
}



//HOME
function displayTweets($type){

	//global $link for accessing the outside variable 
	global $link;

	if ($type == 'public') {
		$whereClause = '';

		//IF WE ARE ON THE TIMELINE
	} else if ($type == 'isFollowing') {

		include('functions/timeline.php');

		// MY TWEETS SECTION!
	} else if($type == 'yourTweets'){

		include('functions/mytweets.php');

	} else if ($type == 'publicprofiles'){
		include('functions/publicprofiles.php');
	
	} else if ($type == 'search'){
			
		include('functions/search.php');

	} else if( is_numeric($type) ){

		$userQuery = "SELECT * FROM `users` WHERE id = '".mysqli_real_escape_string($link, $type)."' LIMIT 1 ";
		$userQueryResult = mysqli_query($link, $userQuery);
		$user = mysqli_fetch_assoc($userQueryResult);
		
		//		print_r( $type );
		$whereClause = "WHERE userid ='".mysqli_real_escape_string($link, $type)."' ";
		
	}
	//	WHERE tweet LIKE '&".mysqli_real_escape_string($link, $_GET['q'])."&'

	//THE MAIN DISPLAYER OF public , timeline and tweets ..  MUST BE UNDERSTAND
	$query = "SELECT * FROM `tweets` ".$whereClause." ORDER BY `datetime` DESC LIMIT 10";
	//kung empty ung whereclause from public so >>>> "SELECT * FROM `tweets` ORDER BY `datetime` DESC LIMIT 10";
	//kung sa timeline naman >>> "SELECT * FROM `tweets` WHERE userid= $row['isFollowing'] ORDER BY `datetime` DESC LIMIT 10"
	//sa yourtweet "SELECT * FROM `tweets` WHERE userid = ".mysqli_real_escape_string($link, $_SESSION['id'])." ORDER BY `datetime` DESC LIMIT 10" 


	$result = mysqli_query( $link , $query);

	if( mysqli_num_rows($result) == 0 ){

		/*if(isset($user)){
			
		echo '<h2> '.  $user['email'] . '&#39s tweets</h2>';
		}
		*/
		echo 'There arre no tweets to display for ' ;

		//DISPLAYING ALL THE TWEETS 
	} else {

		while($row = mysqli_fetch_assoc($result)){

			$userQuery = "SELECT * FROM `users` WHERE id = '".mysqli_real_escape_string($link, $row['userid'])."' LIMIT 1 ";
			$userQueryResult = mysqli_query($link, $userQuery);
			$user = mysqli_fetch_assoc($userQueryResult);



			//Tweet Container and User Email and time stamp 
			echo '<div class="container m-1" id="tweets" style="border: 1px solid #ccc"> <p>'.$user['email']."<span class='text-muted'> &#9679  ".time_since( time() - strtotime($row['datetime'])).' </span></p>';

			//Tweet content
			echo $row['tweet'].'<br> ';


			//			if(isset($_SESSION['id'])){
			//Following button
			echo '<p> <a class="toggleFollow text-info"  data-userid="'.$row['userid'].'">';



			//We check if the following button is followed by the user or what 
			//Follower is the current user the one who is logged in
			//isFollowing the owner of the post
			$s = (isset($_SESSION['id']))? $_SESSION['id'] : '';

			$isFollowingQuery = "SELECT * FROM isfollowing WHERE follower='".mysqli_real_escape_string($link, $s)."' AND isFollowing='".mysqli_real_escape_string($link, $row['userid'])."'  ";

			$isFollowingQueryResult = mysqli_query($link,$isFollowingQuery);


			if(mysqli_num_rows($isFollowingQueryResult) > 0 ){
				echo "unfollow";


			} else{echo "follow"; }


			echo '</a></p></div>'; 
		} //WHILE THERE ARE TWEEETSS!
	} /*DISPLAY TWEETS*/

}

function displaySearch(){
	//display search box
	echo "<form class='form-group'>
		<input type='hidden' name='page' value='search'> 
		<input class='form-control' name='q' placeholder='Search Tweets' > 
		<button class='btn btn-success' type='submit'>Go!</button> </form> ";
}

function displayTweetBox(){

	//If there is an active user then display the tweet box
	if(isset($_SESSION['id']) && $_SESSION['id'] > 0 ){
		echo "<div class='form-group my-3'>
		  <textarea name='tweetPost' id='tweetPost' class='form-control' placeholder='What&#39s on your mind?'></textarea>
		 <button id='tweetPostBtn' class='btn btn-success mt-1 '>post tweet</button></div>";
	}
}




function displayUsers(){
	global $link;
	//DISPLAYING ALL THE ACTIVE USERS IN THE DATABASE
	$query = "SELECT * FROM `users` LIMIT 10";
	$result = mysqli_query( $link , $query);

	while($row = mysqli_fetch_assoc($result)){

		/*href gives us the user id of the link*/
		echo "<div style='border: 1px solid #201' class='m-1 px-3 '><a href='?userid=".$row['id']."'>".$row['email']."</a></div>";
	}
}

?>