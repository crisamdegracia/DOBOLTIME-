<?php

/* Instructors SECTIOM */

$instructors_title					  = get_field('instructor_title');
$instructors_name						  = get_field('instructor_name');
$bio_excerpt 								  = get_field('bio_excerpt');
$full_bio 									  = get_field('full_bio');
$twitter_username 					  = get_field('twitter_username');
$facebook_username  				  = get_field('facebook_username');
$github_username					    = get_field('github_username');
$num_students									= get_field('num_of_students');
$num_reviews									= get_field('num_of_reviews');
$num_courses									= get_field('num_courses');

?>



<!--INSTRUCTOR-->
<section id="instructor">
	<div class="container py-5">
		<div class="row">
			<div class="instructor-content col-12 col-sm-12 col-md-12 col-lg-8 ">
				<div class="row" >
					<!--style="border: 1px solid red"-->
					<div class="col-6 col-sm-5 col-md-5 col-lg-4 col-xl-5 mx-0 px-0 ">
						<h4 id="intructor-title"> <?php echo $instructors_title ." "  ?><small><?php echo $instructors_name ?></small>
						</h4>
					</div>
					<div class="col-6 col-sm-7 col-md-7 col-lg-4 col-xl-3 px-0 mx-0 ">

						<?php if ( !empty( $twitter_username ) ): ?>

						<a href="https://www.twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter"> <i class="fa fa-twitter"></i> </a>
						<?php endif ; ?>

						<?php if ( !empty( $facebook_username ) ): ?>

						<a href="https://www.facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook"><i class="fa fa-facebook"></i></a>
						<?php endif ; ?>

						<?php if ( !empty( $github_username ) ): ?>

						<a href="https://www.github.com/<?php echo $github_username; ?>" class="badge social github"><i class="fa fa-github"></i></a>

						<?php endif ;  ?>

					</div><!--col-lg-4-->
				</div><!--2nd row-->
				<p class="lead"> <?php echo $bio_excerpt ?> </p>
				<p class="lead"> <?php echo $full_bio; ?> </p>

				<hr>
				<h4>The Numbers <small>They Dont't Lie</small></h4>
				<div class="row">
					<div class="col-4">

						<div class="num">
							<div class="num-content">
								<?php echo $num_students ?>+ <span>students</span>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="num">

							<div class="num-content">
								<?php echo $num_reviews ?> <span>reviews</span>
							</div>
						</div>
					</div>

					<div class="col-4">
						<div class="num">

							<div class="num-content">
								<?php echo $num_courses ; ?><span>courses</span>
							</div>
						</div>
					</div>
					<!--				</div>-->
					<!--			</div>-->
				</div><!--row-->
			</div><!--first lg-8-->

		</div><!--first row-->
	</div><!--container-->
</section>
