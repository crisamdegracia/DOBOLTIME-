<?php

/* TESTIMONIALS */
$testimonial_title						= get_field('testimonial_title');


?>
<!--TESTIMONIAL-->
<section id="kudos">
	<div class="container  text-center" >
		<h2><?php echo $testimonial_title; ?></h2>
		<div class="row">
			<div class="col-sm-8 offset-sm-2">

				<?php $loop = new WP_Query( array ( 'post_type' => 'testimonials_section', 'orderby' => 'post_id' , 'order' => 'ASC' ) );   ?>

				<?php while ( $loop -> have_posts() ) : $loop -> the_post(); ?>

				<div class="row testimonials">
					<div class="col-sm-12 col-md-12 col-lg-12 ">
						<!--IF there is Pictures of the testimonies -->
						<?php if( has_post_thumbnail() ) 	the_post_thumbnail( 'post_thumbnail' , ['class' => 'rounded-circle img-fluid'] ) ?>

						<!--ELSE just post the content and the title (but its not actually the title okay?) -->
						<div class="testimonial_content">

							<?php the_content(); ?>
							<?php the_title(); ?>
						</div>

					</div>
				</div>

				<?php endwhile ; ?>

			</div><!--col-8-->
		</div><!--row-->

	</div><!--container-->
</section>