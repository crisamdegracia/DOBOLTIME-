<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta name="description" content="">
		<meta name="author" content="">
		<title>DBootstrap to Wordpress</title>

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
	<body>


		<header class="site-header" role="banner">

			<nav class="navbar navbar-toggleable-sm fixed-top navbar-inverse bg-inverse">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="/"> <img src="./assets/img/logo.png" alt=""> </a>


				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="nav navbar-nav ">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog.php">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="resources.php">Resources</a>
						</li><li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
						</li>
					</ul>
					<!--
<form class="">
<input class="form-control mr-sm-2" type="text" placeholder="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
-->
				</div>
			</nav>


		</header>		


		<section id="" class="feature-image feature-image-default-alt py-5" data-type="background" data-speed="2">
			<h1 class="page-title py-5 text-center text-white">Blog</h1>
		</section>			
		<!--BLOG CONTENT!-->
		<div class="container py-5">
				<div id="primary" class="row">
					<main id="content" class="col-sm-8" role="main">
						<article class="post">
							<header>
								<h3><a href="post.php">Blog Title Here</a></h3>
								<div class="post-details">
									<span><i class="fa fa-user">Sam Bee</i></span>
									<i class="fa fa-clock-o"> Feb 18 2019</i>
									<span><i class="fa fa-folder-open"></i><a href="">Tutorials</a>,<a href="">Coding</a></span>
									<span><i class="fa fa-tags"></i>Tagged <a href="">Wordpress</a>, <a href="">premium</a>,<a href=""> another tag</a></span>
									<span><i class="fa fa-user">Sam Bee</i></span>
									<div class="post-comment-badge">
										<a href=""><span><i class="fa fa-comments"></i></span> 168 </a>
									</div>
								</div>

							</header>

							<div class="post-image">
								<img class="img-fluid" src="./assets/img/hero-bg.jpg" alt="">
							</div><!--psot-image-->
							<div class="post-excerpt">
								<p>Quamquam enim multos ullamco aute non aliquip tractavissent sed laborum. Probant 
									philosophari ita incurreret, quibusdam ut esse, mandaremus culpa laborum fabulas 
									aut quamquam in lorem senserit, culpa eu vidisse e sint eu ex quis amet quis 
									aliquip, lorem ita ex sint ingeniis, et summis amet ab pariatur. Nisi non 
									iudicem non ipsum et qui fore ad sunt. Ingeniis e appellat. Si aut esse commodo 
									qui anim ea nescius. Voluptate veniam est ingeniis relinqueret, dolore 
									consectetur tempor enim appellat, veniam ullamco de voluptatibus ita est do sunt 
									nulla anim. Ne ita reprehenderit qui aliquip tamen sunt mentitum quorum in 
									cernantur labore dolor mentitum quid, ad de philosophari. 
									<a href="post.php">Continue reading..... </a>
								</p>
							</div><!--post-excerpt-->
						</article>
						
						<article class="post">
							<header>
								<h3><a href="post.php">Blog Title Here</a></h3>
								<div class="post-details">
									<span><i class="fa fa-user"></i></span>
									<i class="fa fa-clock-o"> Feb 18 2019</i>
									<span><i class="fa fa-folder-open"></i><a href="">Tutorials</a>,<a href="">Coding</a></span>
									<span><i class="fa fa-tags"></i>Tagged <a href="">Wordpress</a>, <a href="">premium</a>,<a href=""> another tag</a></span>
									<span><i class="fa fa-user">Sam Bee</i></span>
									<div class="post-comment-badge">
										<a href=""><span><i class="fa fa-comments"></i></span> 168 </a>
									</div>
								</div><!--post-details-->

							</header>

							<div class="post-image">
								<img class="img-fluid" src="./assets/img/hero-bg.jpg" alt="">
							</div><!--psot-image-->
							<div class="post-excerpt">
								<p>Quamquam enim multos ullamco aute non aliquip tractavissent sed laborum. Probant 
									philosophari ita incurreret, quibusdam ut esse, mandaremus culpa laborum fabulas 
									aut quamquam in lorem senserit, culpa eu vidisse e sint eu ex quis amet quis 
									aliquip, lorem ita ex sint ingeniis, et summis amet ab pariatur. Nisi non 
									iudicem non ipsum et qui fore ad sunt. Ingeniis e appellat. Si aut esse commodo 
									qui anim ea nescius. Voluptate veniam est ingeniis relinqueret, dolore 
									consectetur tempor enim appellat, veniam ullamco de voluptatibus ita est do sunt 
									nulla anim. Ne ita reprehenderit qui aliquip tamen sunt mentitum quorum in 
									cernantur labore dolor mentitum quid, ad de philosophari. 
									<a href="post.php">Continue reading..... </a>
								</p>
							</div><!--post-excerpt-->
						</article>
						
						<article class="post">
							<header>
								<h3><a href="post.php">Blog Title Here</a></h3>
								<div class="post-details">
									<span><i class="fa fa-user"></i></span>
									<i class="fa fa-clock-o"> Feb 18 2019</i>
									<span><i class="fa fa-folder-open"></i><a href="">Tutorials</a>,<a href="">Coding</a></span>
									<span><i class="fa fa-tags"></i>Tagged <a href="">Wordpress</a>, <a href="">premium</a>,<a href=""> another tag</a></span>
									<span><i class="fa fa-user">Sam Bee</i></span>
									<div class="post-comment-badge">
										<a href=""><span><i class="fa fa-comments"></i></span> 168 </a>
									</div>
								</div>

							</header>

							<div class="post-image">
								<img class="img-fluid" src="./assets/img/hero-bg.jpg" alt="">
							</div><!--psot-image-->
							<div class="post-excerpt">
								<p>Quamquam enim multos ullamco aute non aliquip tractavissent sed laborum. Probant 
									philosophari ita incurreret, quibusdam ut esse, mandaremus culpa laborum fabulas 
									aut quamquam in lorem senserit, culpa eu vidisse e sint eu ex quis amet quis 
									aliquip, lorem ita ex sint ingeniis, et summis amet ab pariatur. Nisi non 
									iudicem non ipsum et qui fore ad sunt. Ingeniis e appellat. Si aut esse commodo 
									qui anim ea nescius. Voluptate veniam est ingeniis relinqueret, dolore 
									consectetur tempor enim appellat, veniam ullamco de voluptatibus ita est do sunt 
									nulla anim. Ne ita reprehenderit qui aliquip tamen sunt mentitum quorum in 
									cernantur labore dolor mentitum quid, ad de philosophari. 
									<a href="post.php">Continue reading..... </a>
								</p>
							</div><!--post-excerpt-->
						</article>
						
						
						<article class="post">
							<header>
								<h3><a href="post.php">Blog Title Here</a></h3>
								<div class="post-details">
									<span><i class="fa fa-user"></i></span>
									<i class="fa fa-clock-o"> Feb 18 2019</i>
									<span><i class="fa fa-folder-open"></i><a href="">Tutorials</a>,<a href="">Coding</a></span>
									<span><i class="fa fa-tags"></i>Tagged <a href="">Wordpress</a>, <a href="">premium</a>,<a href=""> another tag</a></span>
									<span><i class="fa fa-user">Sam Bee</i></span>
									<div class="post-comment-badge">
										<a href=""><span><i class="fa fa-comments"></i></span> 168 </a>
									</div>
								</div>

							</header>

							<div class="post-image">
								<img class="img-fluid" src="./assets/img/hero-bg.jpg" alt="">
							</div><!--psot-image-->
							<div class="post-excerpt">
								<p>Quamquam enim multos ullamco aute non aliquip tractavissent sed laborum. Probant 
									philosophari ita incurreret, quibusdam ut esse, mandaremus culpa laborum fabulas 
									aut quamquam in lorem senserit, culpa eu vidisse e sint eu ex quis amet quis 
									aliquip, lorem ita ex sint ingeniis, et summis amet ab pariatur. Nisi non 
									iudicem non ipsum et qui fore ad sunt. Ingeniis e appellat. Si aut esse commodo 
									qui anim ea nescius. Voluptate veniam est ingeniis relinqueret, dolore 
									consectetur tempor enim appellat, veniam ullamco de voluptatibus ita est do sunt 
									nulla anim. Ne ita reprehenderit qui aliquip tamen sunt mentitum quorum in 
									cernantur labore dolor mentitum quid, ad de philosophari. 
									<a href="post.php">Continue reading..... </a>
								</p>
							</div><!--post-excerpt-->
						</article>
					</main><!--main-->
					
							<aside class="col-sm-4">
								<div class="widget">
									<h4>Join our mailing list</h4>
									<p>Keep  up-to-date with the last news, and we'll <strong>send you something special as thank you!</strong></p>
									<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Click to subscribe</button>
								</div>
								<div class="widget">
									<form role="form" class="search-form form-group">
									<label for="sidebar-search" class="sr-only">Search</label>
										<input class="form-control" id="sidebar-search" placeholder="Search the blog">
									</form>
								</div>
								<div class="widget">
									<h4>About Bootstrap to WordPress</h4>
									<p>Cillum a nam varias doctrina, mandaremus amet summis nescius fore. Quem se ad 
										nulla occaecat. Tempor legam ullamco, iis multos quamquam ubi consequat minim 
										pariatur, et a aute ullamco ea de noster occaecat de veniam eiusmod hic aliquip, 
										magna appellat sed duis illum id dolor nam mandaremus. Culpa domesticarum 
										incididunt minim quibusdam, expetendis amet dolor se dolor do in ex dolor 
										commodo, aliquip cillum offendit, eram voluptatibus ullamco illum voluptate se </p>
								</div>
								<div class="widget">
									<h4>Recent Post</h4>
										<ul>
										<li><a href="">Blog post #1</a></li>
										<li><a href="">Blog post #1</a></li>
										<li><a href="">Blog post #1</a></li>
										<li><a href="">Blog post #1</a></li>
									</ul>
								</div>
								<div class="widget">
									<h4>Categories</h4>
										<ul>
										<li><a href="">Category #1</a></li>
										<li><a href="">Category #1</a></li>
										<li><a href="">Category #1</a></li>
										<li><a href="">Category #1</a></li>
									</ul>
					
								</div>
							</aside>		
				
				
			</div><!--row-->
		</div><!--container-->


		<section>


		</section>





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



		<?php include('views/footer.php') ?>