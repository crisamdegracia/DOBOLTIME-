
<footer class="footer">
	<div class="container">
		<span class="text-muted">&copy; Tweeter 2017</span>
	</div>
</footer>




<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<input type="hidden" value="1" id="loginActive">
					<input type="email" class="form-control mb-1" placeholder="Enter Email" name="email" id="email" autocomplete="off">
					<input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required autocomplete="off">
				</form>
			</div>
			<div class="modal-footer">
				<a href="" id="toggleLogin">Sign up</a>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">login</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

	var toggleLogin = $('#toggleLogin'),
			loginActive = $('#loginActive')


	toggleLogin.click(function(){
		if(loginActive.val() == '1' ){
		
			
			
		} else {
			alert('WAAA')
		}
	})
</script>

</body>
</html>