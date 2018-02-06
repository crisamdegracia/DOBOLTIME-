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



?>