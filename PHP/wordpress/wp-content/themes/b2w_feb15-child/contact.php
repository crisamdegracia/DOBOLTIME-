<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Contact | Bootstrap to Wordpress</title>

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- [if lt IE 9] > <script src="https://oss.maxcdn.com/html5shiv/3.7.2/"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![ednif]-->

		<link rel="icon" href="/b2w_feb15/assets/img/favicon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	</head>
	<body class="full-width-contact">


		<header class="site-header" role="banner">

			<nav class="navbar navbar-toggleable-sm fixed-top navbar-inverse bg-inverse">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="/"> <img src="./assets/img/logo.png" alt=""> </a>


				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="nav navbar-nav ">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="blog.php">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="resources.php">Resources</a>
						</li><li class="nav-item">
						<a class="nav-link active" href="contact.php">Contact</a>
						</li>
					</ul>

				</div>
			</nav>


		</header>		



		<section id="" class="feature-image feature-image-default py-5" data-type="background" data-speed="2">
			<h1 class="page-title py-5 text-center text-white">Contact</h1>
		</section>			


		<div class="container p-5 m-5">
			<div class="row" id="primary">
				<div id="content" class="col-sm-12">
					<section class="main-content">
						<p class="lead">Have any question about the course?  Feel free to get in touch with me! I'll do my best to get back to you ASAP! </p>

						<form action="" class="form-group clearfix">
							<div class="row">
								<div class="col-sm-6 form-group">
								<label for="name" class="sr-only">Name</label>
									<input type="text" id="contact-name" class="form-control" placeholder="Enter name">
								</div>
								<div class="col-sm-6 form-group">
								<label for="email" class="sr-only">Email</label>
									<input id="contact-email" type="text" class="form-control" placeholder="Enter email"></div>
							</div>
							<div class="col-sm-12 form-group">
							<label for="message" class="sr-only">Message</label>
								<textarea class="form-control input-lg" placeholder="You Message" name="message" id="contact-words" cols="30" rows="3"></textarea>
							</div>
							<input type="submit" class="btn btn-info pull-right" value="Get in touch!" >
						</form>
					</section>
				</div>
			</div>
		</div>


		<!--SIGN UP-->
		<section id="signup" data-type="background" data-speed="4">
			<div class="container">
				<div class="row justify-content-center ">
					<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						<h2 id="signup-header">Are You Ready To Take Your Skill To The <strong> Next Level  </strong>?</h2>
						<p><a id="signup-btn" class="btn btn-success btn-block" href="/">Yes Sign Me Up!</a></p>
					</div>
				</div>
			</div>
		</section>

	</body>

	<?php include('views/footer.php') ?>
























