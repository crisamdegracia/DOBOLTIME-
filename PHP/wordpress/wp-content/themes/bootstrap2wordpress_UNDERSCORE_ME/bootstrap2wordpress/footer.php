<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_To_WordPress
 */

?>

<?php wp_footer(); ?>


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



<footer>
	<div class="container text-center py-5">
		<div class="row justify-content-center">

			<div class="col-sm-3 ">
				<p><a href="/"><img src="<?php bloginfo('template_directory') ?>/assets/img/logo.png" alt="Bootstrap to wordpress"></a></p>
			</div>
			<div class="col-sm-6">
				<nav>
					<ul class="list-unstyled list-inline">
						<li class="list-inline-item"><a href="">home</a></li>
						<li class="list-inline-item"><a href="">blog</a></li>
						<li class="list-inline-item"><a href="">resources</a></li>
						<li class="list-inline-item"><a href="">contact</a></li>
						<li class="signup-link list-inline-item"><a href="">Sign up now</a></li>
					</ul>
				</nav>
			</div>

			<div class="col-sm-3">		
			<p class="pull-right"> &copy; 2018 Sambeetech</p>
			</div>
		</div>
	</div>
</footer>





<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/main.js">
</script>


<!----------------------------------------------->
<!------------------MODAL------------------------>
<!----------------------------------------------->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">


			<div class="modal-header">

				<!--TITLE-->
				<h5 class="modal-title" id="modalTitle"><i class="fa fa-envelope"></i> Subscribe to our mailing list</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<!--BODY-->
			<div class="modal-body">
				<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses. <em>for free!</em></p> 
				<form method="post" class="form-inline" role="form">
					<div class="form-group ">					
						<input type="text" class="form-control" placeholder="Your first name" name="name" id="subscribe-name" autofocus autocomplete="off">
					</div>						
					<div class="form-group">					

						<input type="email" name="email" class="form-control" id="subscribe-email" placeholder="Enter your email" required autocomplete="off">

					</div>
					<input type="submit" value="Subscribe" class="btn btn-danger">
				</form>

				<hr class="text-muted">
				<p class="m-0 text-spacing-0"><small>By providing your email you consent to receiving occasional promotional email &amp;  newsletters.<br class="m-0"> No Spam. Just good stuff We respect your privacy &amp;  you may unsubscribe at any time.</small></p>
			</div>

			<!--FOOTER-->

</body>
</html>
