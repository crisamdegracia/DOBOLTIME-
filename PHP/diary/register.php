
<?php 
session_start();


include('vars.php');
include('connection.php');


//if(array_key_exists('logout', $_GET)){
//	$_SESSION['id'] = '';
//}


if(array_key_exists('id', $_SESSION) OR array_key_exists('id' , $_COOKIE)){

	//	header('Location: secretpage.php');
} 


if(mysqli_error($link)){
	die('ERROR SERVER');
} else {

	if(array_key_exists('email' , $_POST) || array_key_exists('password', $_POST)){

		$email = mysqli_real_escape_string($link, $_POST['email']);
		$password = mysqli_real_escape_string($link, $_POST['password']);

		if(!$email){
			$err .= '<p class="mb-1"> Email is required </p>';
		} 
		if(!$password){
			$err .= '<p class="mb-1"> Password is required.</p>';
		}
		if($err){
			$addClass = "alert alert-danger";
			$errmsg = $err;
		} else {


			$query = "SELECT email FROM `users` WHERE email ='".$email."' ";
			$result = mysqli_query($link,$query);
			if(mysqli_num_rows($result) > 0 ){
				$addClass = $classDanger;
				$errmsg = '<p class="m-0"> Email has already been taken </p>';

			} else {

				$hash = password_hash($password , PASSWORD_DEFAULT);

				$query = "INSERT INTO `users` (`email` , `password` ) VALUES ('".$email."','".$hash."') ";


				if($result = mysqli_query($link,$query)){

					$_SESSION['id'] = mysqli_insert_id($link);	

					//					header('Location: secretpage.php');


					$addClass = $classSuccess;
					$errmsg = "Registered Successfully";
				} else {


					$addClass = $classDanger;
					$errmsg = "Can't register at this time";
				}

			} /*kung hind pa taken ang email*/

		} /*kung walang error ang form field*/

	}/*kung my valid na $_POST or what*/

}/*Kung walang error ang data base*/


?>


<?php include('views/headerwonav.php'); ?>


<div class="container mt-5 py-5 text-center">

	<h4 class="display-4 my-5 text-white">Register To Our Secret Diary</h4>

	<div class="row justify-content-center input-group">
		<small class="text-lead <?php echo $addClass; ?>" id="_errmsg"><?php echo $errmsg; ?></small>

	</div>	
	<form action="" method="post">

		<div class="row justify-content-center input-group">
			<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
			<input type="email" name="email" class="form-control col-md-5 mb-1" id="_email" autofocus  placeholder="Enter email">
		</div>

		<div class="row justify-content-center input-group">
			<div  class="input-group-addon"><i class="fa fa-key "></i></div>
			<input name="password"  type="password" id="_pw" class="form-control col-md-5" placeholder="Enter password">
		</div>

		<div class="row justify-content-center input-group">
			<input type="submit" class="btn btn-success mt-1" value="register">
		</div>


		<div class="row justify-content-center">
			<p><a href="index.php">Login</a></p>
		</div>


	</form>
</div>



<?php include('views/footer.php'); ?>