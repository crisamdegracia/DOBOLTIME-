<?php
/*WHO SHOULD TAKE THIS COURSE SECTION*/


$who_feauture_img  	  = get_field('who_feauture_img');
$who_section_title    = get_field('who_section_title');
$who_section_body  	 	= get_field('who_section_body');


?>
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

				<?php echo $who_section_body ; ?>

			</div><!--col-->

		</div><!--row-->
	</div><!--container-->
</section>


<!--CHECKED!-->