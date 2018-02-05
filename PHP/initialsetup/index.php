<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

		<title>Hello, world!</title>
	</head>
	<body>
		<h1>Hello, world!</h1>
		<div class="container mx-0 text-center">

			<form action="" method="get">

				<input id="name" class="form-control col-md-4" type="text" name="name" placeholder="Enter name" autofocus autocomplete="off">
				<input id="password" type="password" class="form-control col-md-4" placeholder="Enter password" name="password" autofocus autocomplete="off">
				<input type="submit" id="btn" class="btn btn-succes">
			</form>
		</div>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script
						src="http://code.jquery.com/jquery-3.3.1.min.js"
						integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
						crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

		<script type="text/javascript">


			$('#btn').click(function(e){

				$.ajax({
					method: 'get',
					url: 'action.php?action=submit',
					data: 'name=' + $('#name').val() + '&password=' + $('#password').val(),
					success: function(result){
						alert(result)
					}
				})

			})
		</script>




	</body>
</html>