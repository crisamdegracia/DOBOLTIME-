<?php


$alertDanger = "";
$alertSuccess = "";
$name = '';
$email = '';
$message = '';
$error = '';
$errorInput = '';

if($_POST){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if(!$name) {

		$error .= '<p class="mb-0"> Name can not be blank. </p>';
	}

	if(!$email){
		$error .= ' <p class="mb-0"> Email can not be blank.</p>';
	}
	if(!$message){
		$error .= 'Please tell us about something.';
	}

	if($error){

		$errorInput = '<h3 class="alert alert-danger" id="errorAlert">'.$error.'</h3>';

	} else {

		//Add PHP email Validation 
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){

			$mailto = 'crisamdegracia2@gmail.com';
			$subject = $name;
			$body	= $message;
			$header = "From: ". $email;
			if (mail($mailto,$subject,$body,$header)){

				$errorInput = '<h3 class="alert alert-success" id="errorAlert">Message Sent!</h3>';

			}
			else {
				$errorInput = '<h3 class="alert alert-danger" id="errorAlert">Could not sent message at this time. please try again!</h3>';


			}/* if Sent*/


		}//Validation





	}


}

?>



<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

		<title>Get in touch</title>
	</head>
	<body>
		<div class="container mt-5 pt-3">
			<h1> Get in touch with us!</h1>
			<?php echo $errorInput; ?>
			<h3 class="alert" id="errorAlertMessage"></h3>

			<form method="post">

				<div class="form-group">




					<div class="form-group">

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"  id="basic-addon1">@</span>
							</div>
							<input type="email" id="femail" class="form-control" name="email" placeholder="yourmail.com" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>


					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">S</span>
						</div>
						<input type="text" name="name" id="fname" class="form-control" placeholder="Subject" aria-label="name" aria-describedby="basic-addon1">
					</div>
				</div>

				<div class="form-group">
					<textarea  id="fmessage" name="message" placeholder="What would you like to ask us?" class="form-control" cols="30" rows="10"></textarea>
				</div><!--TEXTAREA-->




				<input id="submitBtn" type="submit" value="submit" class="btn btn-success">
			</form>



		</div>





		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
		<script type="text/javascript">
			var fname = $('#fname'),
							email = $('#femail'),
							message = $('#fmessage'),
							submitBtn = $('#submitBtn'),
							errorMessage = '',
							errorAlertMessage = $('#errorAlertMessage');


			//			submitBtn.click(function(e){]
			$('form').submit(function(e){
				if(!fname.val()){
					errorMessage += '<p class="mb-0"> Name is required. </p>';
				}
				if(!email.val()){
					errorMessage += '<p class="mb-0"> Email is required </p>'
				}
				if(!message.val()){
					errorMessage += '<p class="mb-0"> Please tell us something!';
				}

				if(errorMessage){
//					e.preventDefault();

					errorAlertMessage.addClass('alert-danger');
					errorAlertMessage.html(errorMessage +' FROM JS') ;
				} else {
//					e.preventDefault();
					
					$('form').off('submit').submit();
					errorAlertMessage.addClass('alert-success');
					errorAlertMessage.html('MESSAGE SENT FROM JS');
				}

			
			})



		</script>



	</body>
</html>