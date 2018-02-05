<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/mvc/style/style.css">
	</head>
	<body>

		<nav class="navbar navbar-toggleable-md navbar-light bg-info">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="/mvc">Twitter</a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="?page=timeline">Timeline<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="?page=tweets">Tweets<span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item active">
						<a class="nav-link" href="?page=public">Public Profiles<span class="sr-only">(current)</span></a>
					</li>

				</ul>
				<form action="" class="pull-xs-right">

					<?php if( isset($_SESSION['id'])) { ?>
					<?php $query = "SELECT * FROM users WHERE id = '".mysqli_real_escape_string($link,$_SESSION['id'])."' "; ?>
					<?php $row = mysqli_fetch_assoc(mysqli_query($link,$query)); ?>
					<!--<p class="text-warning" style="border: 1px solid red">NAME :--> <span> <?php echo $row['email'] ?> </span><!--</p>-->
					<a class="btn btn-outline-danger my-2 my-sm-0" href="?function=logout">logout</a>
					<?php }  else { ?>
					<input type="button" class="btn btn-success" value="Login/Signup" data-toggle="modal" data-target="#exampleModal">
					<?php } ?> 
				</form>
				<!--    <a class="form-inline my-2 my-lg-0">-->
				<!--    </a>-->
			</div>
		</nav>


