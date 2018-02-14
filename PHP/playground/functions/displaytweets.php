<?php 



function displayTweets($type, $limit){
	global $link;
	
	

	$whereClause = '';
	

	if( $type == 'home' ) {

		$whereClause = '';
	}


	/*PAUSE MUNA UNG TIMELINE IAAOUTPUT UNG MGA NAFOLLOW MONA*/


	if( $type == 'timeline'){

		if(isset($_SESSION['id'])){
			// Check only if our user is the current user
			//check the isFollowing table for the id's  users that our users is following 
			$query = "SELECT * FROM following WHERE follower='".mysqli_real_escape_string($link, $_SESSION['id'])."' ";

			$result = mysqli_query($link,$query);

			$whereClause = '';

			while ( $row = mysqli_fetch_assoc($result)){


				if( $whereClause == '') $whereClause = " WHERE";
				else { $whereClause .= " OR"; }

				$whereClause .=" userid=" .$row['isFollowing'];
				//			WHERE userid= $row['isFollowing']
			}
		} else {
			//			$_SESSION['id'] = '';
			$whereClause = '';
		}
	}

	//Displaying my own tweets
	if($type == 'mytweets') {
		$whereClause = '';
		if(isset($_SESSION['id'])){
			
			$myTweetsQuery = "SELECT * FROM tweets WHERE userid='".$_SESSION['id']."' ";
			$myTweetsResult = mysqli_query( $link , $myTweetsQuery);
			
			$row = mysqli_fetch_assoc($myTweetsResult);
			
			$whereClause = " WHERE userid = ".$row['userid']." ";

		}
	}
	
	
	//Display the user profile form public profiles
	if( is_numeric($type) > 0 ){
		
		
		$query = "SELECT * FROM users WHERE id=".$type." ";
		$row = mysqli_fetch_assoc(mysqli_query($link , $query));
		
		$whereClause = " WHERE userid=".$row['id']." ";
	}

	
	if($type == 'search'){
 $whereClause = "WHERE tweet LIKE '%".mysqli_real_escape_string($link, $_GET['q'])."%' " ;
		
								
	}
	
	
//	$limit = ($limit == '') ? $limit : 3 ;
	 $tweetQuery = "SELECT * FROM tweets ".$whereClause." ORDER BY `datetime` DESC LIMIT ".$limit." ";

	$tweetResult = mysqli_query( $link , $tweetQuery);

	while($row = mysqli_fetch_assoc( $tweetResult )){



		$user = "SELECT * FROM users WHERE id = '".$row['userid']."' " ;
		$userResult = mysqli_query( $link , $user);
		$userRow = mysqli_fetch_assoc($userResult);
		$key = '';





		echo '

			<div  class="p-2 m-1 postContent" style="border:1px solid #ccc">'

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
					echo ' </p> <button  data-userid="'.$row['userid'].'"  class="my-0 btn btn-sm btn-outline-info followBtn "> unfollow ';
				}

			} else {
				echo '</p> <button data-userid="'.$row['userid'].'"  class="my-0 btn btn-sm btn-outline-info followBtn "> follow';
			}

			//set follow for default button value. e.g no logged in user.
		} /*UNFOLLOW AND FOLLOW BUTTON*/ 

		echo 
			'</button></div>	';
	} /*end of while */
			
	echo '<form><input type="hidden" name="loadmore" value="'.$limit.'">
	<button class="btn btn-danger" id="btn-more">more</button></form>';
	

}






?>