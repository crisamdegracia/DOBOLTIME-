
<?php 
session_start();
include('connection.php');
include('vars.php');

if(array_key_exists('logout', $_GET)){
	$_SESSION['id'] = '';
} 

if( ( array_key_exists('id', $_SESSION ) && $_SESSION['id'] ) OR (array_key_exists('id', $_COOKIE) && $_COOKIE['id'] ) ) {
	header('Location: secretpage.php');
	
} 
	
	


if(mysqli_connect_errno()){
	die('SERVER ERROR');
} else{


	if(array_key_exists('email' , $_POST) || array_key_exists('password', $_POST)){

		$email = mysqli_real_escape_string($link, $_POST['email']);
		$password = mysqli_real_escape_string($link, $_POST['password']);

		if(!$email){
			$err .= '<p class="mb-1"> Email is required </p>';
		} 
		if(!$password){

			$err .= '<p class="mb-1"> Password is required.</p>';
		}  else {


			$query = "SELECT * FROM `users` WHERE email ='".$email."' ";
			$result = mysqli_query($link,$query);
			if(mysqli_num_rows($result) > 0 ){
				$row = mysqli_fetch_array($result);

				if( password_verify( $password , $row['password'] ) ){

					$_SESSION['id'] = $row['id'];
					header('Location: secretpage.php');
//					echo $_SESSION['id'];

				} else {
					$addClass = $classSuccess;
					$errmsg = '<p class="m-0"> Unable to login. </p>';
				} 


			}  else {
				$addClass = $classDanger;
				$errmsg = '<p class="m-0"> Invalid login information. </p>';
			}
		}
	}
}
?>


<?php include('views/headerwonav.php'); ?>

<div class="container text-center my-5 py-5">
	<div class="jumbotron bg-inverse text-white ">

		<h4 class="display-4">Secret Diary</h4>	
		<small class="text-muted">Store your thought securely and privately</small>
		<hr>
		<div class="row justify-content-center">
			<small class="text-muted <?php echo $addClass; ?>" id="_errmsg"><?php echo $errmsg; ?></small>
		</div>
		<form action="" method="post" >
			<div class="form-group row justify-content-center input-group">
				<div class="input-group-addon  bg-danger text-warning"><i class="fa fa-envelope"></i></div>
				<input required autofocus type="email" class="form-control col-md-5" name="email" id="_email" placeholder="Enter email">
			</div>

			<div class="form-group row justify-content-center input-group">
				<div class="input-group-addon  bg-danger text-warning"><i class="fa fa-key"></i></div>
				<input required type="password" class="form-control col-md-5" name="password" id="_pw" placeholder="Enter email">
			</div>
			<div class="form-group row justify-content-center input-group">
				<input type="submit" id="_loginBtn" class="btn btn-success" value="login">

			</div>		
			<p><a href="register.php">Register</a></p>
		</form>
	</div>
</div>


<?php include('views/footer.php'); ?>