<footer class="footer">
	<div class="container">
		<span class="text-muted">&copy; MY WEBSITE 2018</span>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


<!----------------------------------------------->
<!------------------MODAL------------------------>
<!----------------------------------------------->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTitle">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>






			<div class="modal-body">

				<div class="alert alert-danger" id="alertMsg"></div>

				<form method="post">
					<input type="hidden" value="1" id="loginActive" name="loginActive">
					<input type="email" class="form-control mb-1" required autofocus placeholder="Enter Email" name="email" id="email" autocomplete="off">
					<input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
				</form>

			</div>

			<div class="modal-footer">

				<a  class="btn btn-outline-success" id="toggleLogin">Sign up</a>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" id="loginBtn" class="btn btn-primary">login</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

	var email 			= $('#email'),
			password		= $('#password'),
			loginBtn		= $('#loginBtn'),
			err					= '',
			alertMsg		= $('#alertMsg'),
			toggleLogin = $('#toggleLogin'),
			loginActive	= $('#loginActive'),
			loginBtn		= $('#loginBtn'),
			modalTitle	= $('#modalTitle'),
			tweetPostButton = $('#tweetPostButton'),
			postAlert		= $('.postAlert'),
			followBtn		= $('.followBtn');

	alertMsg.hide();

	/*TOGGLES LOGIN BUTTONS */
	toggleLogin.click(function(){

		if(loginActive.val() == '1'){
			modalTitle.html('Sign up!');
			toggleLogin.html('Login');
			loginBtn.html('Signup');
			loginActive.val('0');
		} else {
			modalTitle.html('Log in!')
			toggleLogin.html('Signup')
			loginBtn.html('Login')
			loginActive.val('1')
		}
	})


	/*CHECK THE MODAL INPUT FIELD IF EMPTY THEN SEND AJAX*/
	loginBtn.click(function(e){

		$.ajax({
			method: "POST",
			url: "actions.php?action=login",
			data: "email=" + email.val() + "&password=" + password.val() + "&login=" + loginActive.val(),
			success: function(result){

				if(result == '1'){
					window.location.assign('/playground');
				} else {
					alertMsg.html(result).show();

				}

			}

		})
	})

	//POSTING A TWEET
	tweetPostButton.click(function(e){

		$.ajax({
			method: "POST",
			url: "actions.php?action=tweetpost",
			data: "tweet=" + $('#tweetPost').val(),
			success: function(result){
				if(result == '1') {
					postAlert.removeClass('alert alert-danger');
					postAlert.html('Tweet Successfully added!').addClass('alert alert-success').show();
					location.reload();

				} else {
					postAlert.removeClass('alert alert-success');
					postAlert.html(result).addClass('alert alert-danger').show();
				}
			}

		})
	})

//FOLLOWING AND UNFOLLOWING

followBtn.click(function(e){
	
	$.ajax({
		method: "POST", 
		url: 'actions.php?action=following',
		data: 'followid=' + $(this).data('userid'),
		success: function(result){
			alert(result);
		}
	})
	
	
})
	
	
</script>

</body>
</html>