<?php 



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


	$tweetQuery = "SELECT * FROM tweets ".$whereClause." ORDER BY `datetime` DESC LIMIT 5 ";

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

			//		$_SESSION['id'] = (isset($_SESSION['id'])) ? $_SESSION['id'] : '';
			$followingQuery = "SELECT * FROM following WHERE follower = '".$_SESSION['id']."' AND isFollowing = '".$row['userid']."' " ;
			$followingResult = mysqli_query($link , $followingQuery);
			$followingRow = mysqli_fetch_assoc($followingResult);


			if(mysqli_num_rows($followingResult) > 0) {

				//Sets value for me if the current user is the session id
				if( $_SESSION['id'] == $row['userid'] ){
					echo '</p> <span class="text-warning"> Your Tweet </span>';
				} else {
					echo ' </p> <button data-userid="'.$row['userid'].'"  class="my-0 btn btn-sm btn-outline-info followBtn "> unfollow ';
				}

			} else {
				echo '</p> <button data-userid="'.$row['userid'].'"  class="my-0 btn btn-sm btn-outline-info followBtn "> follow';
			}

			//set follow for default button value. e.g no logged in user.
		}  

		echo 
			'</button></div>	';
	}
	echo '<a id="loadMoreBtn" class="btn btn-warning">load more</a>';


}



?>