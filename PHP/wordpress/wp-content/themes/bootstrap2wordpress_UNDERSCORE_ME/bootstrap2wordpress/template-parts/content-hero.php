
<?php

/*the 17 is the POST ID of the page form WordPress Dashboard */
$prelaunch_price		= get_post_meta( 17, 'prelaunch_price', true );
$launch_price				= get_post_meta( 17, 'launch_price', true );
$final_price				= get_post_meta( 17, 'final_price', true );
$course_url					= get_post_meta( 17, 'course_url', true );
$button_text				= get_post_meta( 17, 'button_text', true );

?>

<!--HERO-->
<section  id="hero" data-type="background" data-speed="20">

	<article>
		<div class="container-fluid">
			<div class="row">

				<div class="col-sm-4  col-md-6">
					<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/assets/img/logo-badge.png" class="logo" alt="">
				</div>

				<div class=" col-sm-8  col-md-6  hero-text">


					<h3> <?php bloginfo('name');?> </h3>
					<small class="lead"> <?php bloginfo('description') ?>  </small>
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
<!--CHECKED!-->