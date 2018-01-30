<?php
	
$city = '';

if($_GET['city']) {
		$city = $_GET['city'];
	$forecastPage = file_get_contents("https://www.weather-forecast.com/locations/".$_GET['city']."/forecasts/latest");
	
	
//	https://www.weather-forecast.com/locations/Philadelphia/forecasts/latest
	
	echo $forecastPage;
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
		<link rel="stylesheet" href="./style/style.css">

		<title>Get in touch</title>
	</head>
	<body>
		<div class="container mt-5 pt-3">
			<div class="row justify-content-center">

				<div class="text-center">
					<h3 class="display-4">What's The Weather?</h3>
					<small class="text-warning">Enter the name of the city</small>
					<hr>
					<form>
						<input type="text" class="form-control" name="city" >
						<input type="submit" value="submit" class="btn btn-success mt-2">

					</form>

				</div>
				<p class="alert"></p>

			</div>
		</div>





		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
		<script type="text/javascript">





		</script>



	</body>
</html>