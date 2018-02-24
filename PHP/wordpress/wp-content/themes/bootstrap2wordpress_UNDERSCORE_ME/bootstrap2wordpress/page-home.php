<?php
/*
Template Name: Home Page
*/

/*CUSTOM FIELDS*/


/*the 17 is the POST ID of the page form WordPress Dashboard */
$prelaunch_price		= get_post_meta( 17, 'prelaunch_price', true );
$launch_price				= get_post_meta( 17, 'launch_price', true );
$final_price				= get_post_meta( 17, 'final_price', true );
$course_url					= get_post_meta( 17, 'course_url', true );
$button_text				= get_post_meta( 17, 'button_text', true );
$optin_text					= get_post_meta( 17, 'optin_text', true );
$optin_btn_txt			= get_post_meta( 17, 'optin_btn_txt', true );


//ADVANCED CUSTOM FIELDS
/*BOOST INCOME SECTION*/
$income_feature_image						=	get_field('income_feature_image');
$income_section_title						=	get_field('income_section_title');
$income_section_description			=	get_field('income_section_description');
$reason_1_title									=	get_field('reason_1_title');
$reason_1_description						=	get_field('reason_1_description');
$reason_2_title									=	get_field('reason_2_title');
$reason_2_description						=	get_field('reason_2_description');


/*WHO SHOULD TAKE THIS COURSE SECTION*/


$who_feauture_img  	  = get_field('who_feauture_img');
$who_section_title    = get_field('who_section_title');
$who_section_body  	 	= get_field('who_section_body');

get_header(); ?>







<!--HERO-->
<section  id="hero" data-type="background" data-speed="20">

	<article>
		<div class="container-fluid">
			<div class="row">

				<div class="col-sm-4  col-md-6">
					<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/assets/img/logo-badge.png" class="logo" alt="">
				</div>

				<div class=" col-sm-8  col-md-6  hero-text">
					<h3><?php bloginfo('name');?></h3>
					<small class="lead"><?php bloginfo('description')?></small>
					<div id="price-timeline">

						<div class="price active">
							<h4>Pre-Launch Price <small>Ends soon!</small></h4>
							<span><?php echo $prelaunch_price ?></span>
						</div>
						<div class="price">

							<h4>Launch Price <small>Coming soon!</small></h4>
							<span><?php echo $launch_price ?></span>
						</div>
						<div class="price">

							<h4>Final  Price <small>Final Price</small></h4>
							<span><?php echo $final_price ?></span>
						</div>

					</div><!--price timeline-->

					<p><a class="btn btn-danger btn-lg" href="<?php echo $course_url ?>" role="button"><?php echo $button_text ?> &raquo;</a></p>


				</div><!--Hero Text-->
			</div><!--row-->
		</div><!--cotnainer-->
	</article>
</section>




<!--OPT IN SECTION-->
<section id="optin">

	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<small class="lead">
					<?php echo $optin_text; ?>
				</small>
			</div>
			<div class="col-sm-4">
				<div class="btn btn-success m-0  btn-block" data-toggle="modal" data-target="#exampleModal"><?php echo $optin_btn_txt ?> </div>
			</div>
		</div>
	</div>

</section>




<!--BOOST YOU INCOME SECTION-->
<section id="boost-income">
	<div class="container text-center pt-4">
		<div class="section-header">

			<!--if user upload an image-->


			<?php if(  !empty( $income_feature_image )  ) : ?> 

			<img src="<?php echo $income_feature_image['url'] ?>" alt="<?php echo $income_feature_image['alt'] ?>">

			<?php endif ;?>


			<h2><?php echo $income_section_title ?></h2>
		</div>
		<p> <?php echo $income_section_description;  ?></p>

		<div class="row">
			<div class="col-sm-6">
				<h3><?php echo $reason_1_title; ?> </h3>
				<p> <?php echo $reason_1_description ?> </p>
			</div>
			<div class="col-sm-6">
				<h3><?php echo $reason_2_title ?> </h3>
				<p> <?php echo $reason_2_description ?> </p>
			</div>

		</div>
	</div>

</section>


<!--

$who_feauture_img  	  = get_field('who_feauture_img');
$who_section_title    = get_field('who_section_title');
$who_section_body  	 	= get_field('who_section_body');

-->

<!-- WHO BENEFITS SECTION-->
<section id="who-benefits">
	<div class="container text-center pt-5">
		<div class="section-header">
		
		<?php if(  !empty( $who_feauture_img ) ) : ?>
			<img src="<?php echo $who_feauture_img['url'] ?>" alt="<?php echo $who_feauture_img['alt']; ?>">
			
			<?php endif ; ?>
			
			<h2><?php echo $who_section_title ; ?></h2>
		</div>

		<div class="row">
			<div class="col-sm-10 offset-sm-1">

				<h3>Grabphic &amp; Web Developer</h3>
				<p>Nescius fugiat magna iis ipsum non cupidatat eu veniam id incurreret elit sunt 
					incididunt labore ne quamquam eram enim a irure. Aliqua mentitum reprehenderit 
					do eram sed offendit nam deserunt tamen quem doctrina noster do senserit 
					graviterque ab arbitror hic hic vidisse imitarentur iis occaecat hic aute te 
					expetendis eruditionem iis voluptate nam culpa probant de efflorescere. Fabulas 

					arbitror, summis possumus de pariatur, proident ea malis litteris est possumus 
					quis tempor cupidatat si mentitum est tempor se varias probant laboris.</p>
			</div><!--col-->
		</div>
		<div class="row">

			<div class="col-sm-10 offset-sm-1">
		
				<?php echo $who_section_body ; ?>
					
			</div><!--col-->

		</div><!--row-->
	</div><!--container-->
</section>




<!--COURSE FEATURES-->
<section id="course-features">
	<div class="container text-center py-5 ">

		<div class="section-header">
			<img src="<?php bloginfo('template_directory') ?>/assets/img/icon-rocket.png" alt="">
			<h2>Course Features</h2>
		</div>


		<div class="row justify-content-center py-4">
			<div class="col-sm-2">
				<i class="ci ci-computer"></i>
				<h4>Lifetime access to 88+ lectures</h4>
			</div>

			<div class="col-sm-2">
				<i class="ci ci-watch"></i>
				<h4>10+ Hours of HD Video Content</h4>
			</div>

			<div class="col-sm-2">
				<i class="ci ci-community"></i>
				<h4>Access to a community of like-minded students</h4>
			</div>

			<div class="col-sm-2">
				<i class="ci ci-instructor"></i>
				<h4>Direct access to the instructor</h4>
			</div>

			<div class="col-sm-2">
				<i class="ci ci-device"></i>
				<h4>Accessible content on your mobile devices</h4>
			</div>
		</div>
	</div>

</section>




<!--PROJECT SECTIONS-->
<section id="project-features">
	<div class="container text-center pt-5">
		<h2>Final Project Features</h2>
		<p class="lead">Sint hic ne noster nescius de non aliquip tractavissent. Cillum philosophari 
			probant enim fabulas ita ab ipsum admodum possumus. Ipsum quibusdam si multos 
			anim, incurreret nam minim nostrud, se cillum eram sint ingeniis ita velit 
			incurreret ea minim </p>
		<div class="row">

			<div class="col-sm-4">
				<img src="<?php bloginfo('template_directory') ?>/assets/img/icon-design.png" alt="">
				<h3>Sexy &amp; Modern Design</h3>
				<p>You get to work with a modern, profesional quality design &amp; layout.</p>
			</div>

			<div class="col-sm-4">
				<img src="<?php bloginfo('template_directory') ?>/assets/img/icon-code.png" alt="">
				<h3>Quality HTML 5 &amp; CSS 3</h3>
				<p>You'll learn how hand-craft a stunning website with valid semantic and beautiful HTML 5 &amp; CSS 3</p>
			</div>

			<div class="col-sm-4">
				<img src="<?php bloginfo('template_directory') ?>/assets/img/icon-cms.png" alt="">
				<h3>Easy-to-use CMS </h3>
				<p>Allow your clients to easily update their websites by converting your static to dynamic websites using <em> Wordpress</em></p>
			</div>
		</div>
	</div>

</section>




<!--VIDEO FEATURETTE -->
<section id="featurette">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 offset-2">
				<h2>Watch The Course Intro</h2>
				<div class="embed-responsive embed-responsive-16by9">

					<!--										<iframe width="100%" height="315" src="//www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>-->
				</div>
			</div>
		</div>
	</div>
</section>


<!--INSTRUCTOR-->
<section id="instructor">
	<div class="container py-5">
		<div class="row">
			<div class="instructor-content col-12 col-sm-12 col-md-12 col-lg-8 ">
				<div class="row" >
					<!--style="border: 1px solid red"-->
					<div class="col-6 col-sm-5 col-md-5 col-lg-4 col-xl-5 mx-0 px-0 ">
						<h4 id="intructor-title"> Your Instructor<small> Brad Hussey</small>
						</h4>
					</div>
					<div class="col-6 col-sm-7 col-md-7 col-lg-4 col-xl-3 px-0 mx-0 ">
						<a href="https://twitter.com" class="badge social twitter"> <i class="fa fa-twitter"></i> </a>
						<a href="https://facebook.com" class="badge social facebook"><i class="fa fa-facebook"></i></a>
						<a href="https://github.com" class="badge social github"><i class="fa fa-github"></i></a>
					</div><!--col-lg-4-->
				</div><!--2nd row-->
				<p class="lead">Dolor iis quibusdam aut aute. Se multos tamen fore senserit, mentitum labore.</p>
				<p class="lead">Dolor iis quibusdam aut aute. Se multos tamen fore senserit, mentitum labore.</p>
				<p class="lead">Dolor iis quibusdam aut aute. Se multos tamen fore senserit, mentitum labore.</p>
				<p class="lead">Dolor iis quibusdam aut aute. Se multos tamen fore senserit, mentitum labore.</p>
				<hr>
				<h4>The Numbers <small>They Dont't Lie</small></h4>
				<div class="row">
					<div class="col-4">

						<div class="num">
							<div class="num-content">
								41,000+ <span>students</span>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="num">

							<div class="num-content">
								568 <span>reviews</span>
							</div>
						</div>
					</div>

					<div class="col-4">
						<div class="num">

							<div class="num-content">
								8 <span>courses</span>
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


<!--TESTIMONIAL-->
<section id="kudos">
	<div class="container py-5 text-center">
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<h2>What people are saying about Brad</h2>

				<div class="row testimonials my-2">
					<div class="col-md-10">
						<img src="<?php bloginfo('template_directory') ?>/assets/img/aj.png" alt="">

						<p class="blockquote">Lorem mandaremus eruditionem ne anim id deserunt non multos, sed anim incurreret 
							praesentibus, aut amet senserit. Anim voluptate sed praesentibus. Quorum an 
							consequat ab aute est elit consequat ita praesentibus, singulis sunt aute id 
							quae, ea o dolore occaecat, eiusmod malis legam cu</p>
						<cite>&mdash; Amet qui occaecat ad nulla eu tempor illum anim appellat ipsum ea sed quibusdam 
							eu consequat</cite>
					</div>
				</div>
				<div class="row testimonials my-2">
					<div class="col-md-10">
						<img src="<?php bloginfo('template_directory') ?>/assets/img/ben.png" alt="">

						<p class="blockquote">Lorem mandaremus eruditionem ne anim id deserunt non multos, sed anim incurreret 
							praesentibus, aut amet senserit. Anim voluptate sed praesentibus. Quorum an 
							consequat ab aute est elit consequat ita praesentibus, singulis sunt aute id 
							quae, ea o dolore occaecat, eiusmod malis legam cu</p>
						<cite>&mdash; Amet qui occaecat ad nulla eu tempor illum anim appellat ipsum ea sed quibusdam 
							eu consequat</cite>
					</div>
				</div>
				<div class="row testimonials my-2">
					<div class="col-md-10">
						<img src="<?php bloginfo('template_directory') ?>/assets/img/brennan.jpg" class="rounded-circle" alt="">

						<p class="blockquote">Lorem mandaremus eruditionem ne anim id deserunt non multos, sed anim incurreret 
							praesentibus, aut amet senserit. Anim voluptate sed praesentibus. Quorum an 
							consequat ab aute est elit consequat ita praesentibus, singulis sunt aute id 
							quae, ea o dolore occaecat, eiusmod malis legam cu</p>
						<cite>&mdash; Amet qui occaecat ad nulla eu tempor illum anim appellat ipsum ea sed quibusdam 
							eu consequat</cite>
					</div>
				</div>
				<div class="row testimonials my-2">
					<div class="col-md-10">

						<img src="<?php bloginfo('template_directory') ?>/assets/img/ernest.png" alt="">

						<p class="blockquote">Lorem mandaremus eruditionem ne anim id deserunt non multos, sed anim incurreret 
							praesentibus, aut amet senserit. Anim voluptate sed praesentibus. Quorum an 
							consequat ab aute est elit consequat ita praesentibus, singulis sunt aute id 
							quae, ea o dolore occaecat, eiusmod malis legam cu</p>
						<cite>&mdash; Amet qui occaecat ad nulla eu tempor illum anim appellat ipsum ea sed quibusdam 
							eu consequat</cite>
					</div>
				</div>


			</div><!--col-8-->
		</div><!--row-->

	</div><!--container-->
</section>









<?php

	get_footer();
