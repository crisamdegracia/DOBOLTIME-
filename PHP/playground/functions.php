<?php 

include('connection.php');


if( array_key_exists('page' , $_GET ) && $_GET['page']  == 'logout' ) {
	session_unset();
}

if(mysqli_error($link)){
	die('SERVER ERROR!');
} 



function time_since($since) {

	$chunks = array(
		array(60 * 60 * 24 * 365 , 'year'),
		array(60 * 60 * 24 * 30 , 'month'),
		array(60 * 60 * 24 * 7, 'week'),
		array(60 * 60 * 24 , 'day'),
		array(60 * 60 , 'hour'),
		array(60 , 'minute'),
		array(1, 'sec')

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
		return $print = "$count {$name}s ago" ;
	}


	//		$print = ($count == 1) ? '1 '.$name : "$count {$name}s";
	//		$print = ($count > 0) ? '1 '.$name : "just now";
	//	return $print;
}


function displayHeader(){
	global $link;
	if(isset($_SESSION['id'] )) {


		$query = "SELECT * FROM users  WHERE id = '".$_SESSION['id']."' ";

		$row = mysqli_fetch_assoc(mysqli_query( $link , $query));


		echo  '<span style="color: #000">'.$row['email'].' ' . $_SESSION['id'] . '</span>	<a class="btn btn-outline-danger my-2 my-sm-0" href="?page=logout">logout</a>';
	} else { 
		echo '
					<input type="button" class="btn btn-success" value="Login/Signup" data-toggle="modal" data-target="#exampleModal">' ;
	}
}



function displayTweets($type){
	global $link;
	$whereClause = '';

	if( $type == 'home' ) {

		$whereClause = '';
	}

	//
	//	$user = "SELECT * FROM users ".whereClause." " ;
	//	$userResult = mysqli_query( $link , $user);
	//	$userRow = mysqli_fetch_assoc($userResult);
	//


	$tweetQuery = "SELECT * FROM tweets ".$whereClause." ORDER BY `datetime` DESC LIMIT 10 ";

	$tweetResult = mysqli_query( $link , $tweetQuery);

	while($row = mysqli_fetch_assoc( $tweetResult )){



		$user = "SELECT * FROM users WHERE id = '".$row['userid']."' " ;
		$userResult = mysqli_query( $link , $user);
		$userRow = mysqli_fetch_assoc($userResult);
		$key = '';





		echo '

			<div class=" p-2 m-1" style="border:1px solid #ccc">'

			//Display user Email
			.$userRow['email'].

			//Display Time
			'  &#8226  <span class="text-muted">'
			. time_since(time() -  strtotime($row['datetime']) ) .
			'</span><p>'

			//TWeet Content
			.$row['tweet'].' ';


		//will display the follow button if there is active or logged in user
		//		if(isset($_SESSION['id'])){ 
		//Follow Button


		//check if there is user to display the unfollow or follow button value
		if(isset($_SESSION['id'])){

			echo	'</p>  '  ;




			//		$_SESSION['id'] = (isset($_SESSION['id'])) ? $_SESSION['id'] : '';
			$followingQuery = "SELECT * FROM following WHERE follower = '".$_SESSION['id']."' AND isFollowing = '".$row['userid']."' " ;
			$followingResult = mysqli_query($link , $followingQuery);
			$followingRow = mysqli_fetch_assoc($followingResult);


			if(mysqli_num_rows($followingResult) > 0) {

				//Sets value for me if the current user is the session id
				if( $_SESSION['id'] == $row['userid'] ){
					echo '<span class="text-warning"> Your Tweet </span>';
				} else {
					echo ' <button data-userid="'.$row['userid'].'"  class="my-0 btn btn-sm btn-outline-info followBtn "> unfollow ';
				}

			} else {
				echo '<button data-userid="'.$row['userid'].'"  class="my-0 btn btn-sm btn-outline-info followBtn "> follow';
			}

			//set follow for default button value. e.g no logged in user.
		}  

		echo 
			'</button></div>	';
	}



}


function displaySearch(){

	echo '

	<div class="form-inline"> 
		<input class="form-control" placeholder="Search something">
		<button class="btn btn-success">Search</button>
	</div> 

	';
}


function displayTweetBox(){

	echo '
		<div class="form-group">
			<p class="m-0 px-3 py-1 postAlert"></p>
			<textarea class="form-control" id="tweetPost" placeholder="What&#39s on your mind?"></textarea>
				<button class="btn btn-success" id="tweetPostButton">Post a Tweet</button>
	  </div>
	';


}


?>