



<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script type="text/javascript">

	var _email	= $('#_email'),
			_pw			=	$('#_pw'),
			_err		= '',
			_errmsg	= $('#_errmsg');



	$('form').submit(function(e){

		if(!_email.val()){
			_err += '<p class="my-0">Email required.</p>';
		}
		if(!_pw.val()){

			_err += '<p class="my-0">Password required.</p>';
		} 

		if(_err){
			_errmsg.addClass('alert alert-danger');
			_errmsg.html(_err);

		} else {
			_errmsg.addClass('alert alert-success')
			_errmsg.html('<small class="text-lead">Please wait while we\'re directing you to the page.</small>');
		}

		$('form').off('submit').submit();
		e.stopPropagation();


	})


	$('#diary').bind('input propertychange', function(){


		$.ajax({
			method: "POST",
			url: "secretpage.php",
			data:{content: $('#diary')}
		}).done(function(msg){
			alert(msg);
		})
	})

</script>

</body>
</html>