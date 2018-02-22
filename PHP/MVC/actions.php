<?php

include('functions.php');
$_SESSION['id'] = '';

if($_GET['action'] == 'loginSignup'){

	$email = mysqli_real_escape_string($link , $_POST['email']);
	$password = mysqli_real_escape_string($link ,$_POST['password']);
	$loginActive = mysqli_real_escape_string($link , $_POST['loginActive']);
	$error = '';
	$errorMsg = '';

	if(!$email) {
		$error .= '<p class="mb-1"> Email is required. </p>';
	} 

	if(!$password) {
		$error .= '<p class="m-0"> Password is required. </p>';
	} 

	else if(filter_var($email,FILTER_VALIDATE_EMAIL) === false ) {

		$error .= "Invalid Email.";
	}

	if($error){

		echo $error;
		exit();
	} 

	else {

		//Sign user up
		if($loginActive == '0'){

			$query = 'SELECT * FROM `users` WHERE email = "'.$email.'" LIMIT 1';

			if( $result = mysqli_query($link, $query) ){

				if(mysqli_num_rows($result) > 0 ){
					echo 'Email is already taken';

				} 
				else {
					$hash = password_hash($password, PASSWORD_DEFAULT);

					$query = "INSERT INTO `users` (`email` , `password`) VALUES ('".$email."' , '".$hash."') ";

					if($result = mysqli_query($link, $query)){

						echo '1' ;

						$_SESSION['id'] = mysqli_insert_id($link);
					} else {
						echo "Sorry, Please try again later!";
					}
				}

			} else {
				echo "Sorry, Please try again later!";	
			} 

			//LOGIN 
		} else {

			$query = "SELECT * FROM `users` WHERE email = '".$email."' ";

			$result = mysqli_query($link, $query);

			if(mysqli_num_rows($result) > 0 ) {

				$row = mysqli_fetch_array($result);

				if( $row['email'] == $email && password_verify($password, $row['password'])){
					echo '1';

					$_SESSION['id'] = $row['id'];
					
				} else {
					echo 'Email or password is incorrect.';
				}
			} else echo 'Email or password is incorrect - please try again!';



		}
	}

} 


if( $_GET['action'] == 'toggleFollow'){

	//Follower is the current user the one who is logged in
	//isFollowing the owner of the post

	$query = "SELECT * FROM isfollowing WHERE follower='".mysqli_real_escape_string($link, $_SESSION['id'])."' AND isFollowing='".mysqli_real_escape_string($link, $_POST['userid'])."'  ";

	$result = mysqli_query($link,$query);


	if(mysqli_num_rows($result) > 0 ){
		$row = mysqli_fetch_assoc($result);

		//UNFOLLOW
		$query = "DELETE FROM isfollowing WHERE id = '".mysqli_real_escape_string($link,$row['id'])."' ";
		mysqli_query($link,$query);
		echo '1';

	} else {

		//FOLLOW
		$query =  "INSERT INTO isfollowing (follower , isFollowing) VALUES('".mysqli_real_escape_string($link,$_SESSION['id'])."' , '".mysqli_real_escape_string($link,$_POST['userid'])."')";
		if(mysqli_query($link ,  $query)) echo '2';

	}
}

//POSTING A TWEET
if($_GET['action'] == 'postTweet'){
	
//	print_r($_POST['tweet']);
	
	if( !$_POST['tweet'] ){
		echo 'Tweet is empty';
	}
	else if(strlen($_POST['tweet']) > 200){
		echo 'max input reached';
	} else {


//	$time = date_default_timezone_set('Asia/Bangkok');
//		print_r($_POST);
//		echo date("Y-m-d H:i:s");
		$query = "INSERT INTO `tweets`( `tweet`, `userid`, `datetime`) VALUES('".mysqli_real_escape_string($link, $_POST['tweet'])."' , '".mysqli_real_escape_string($link, $_SESSION['id'])."'   , '".date("Y-m-d H:i:s")."'  )";
	 if (mysqli_query($link, $query )) echo 'success'; 
		else  echo  'Wrong move '.$_POST['tweet'];
	}
}

?>