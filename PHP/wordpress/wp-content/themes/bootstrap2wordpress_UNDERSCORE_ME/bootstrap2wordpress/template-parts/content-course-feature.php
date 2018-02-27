<?php

/* Course Features section */
$course_feature_image 		  = get_field('course_feature_image');
$course_feature_title 	 	  = get_field('course_feature_title');
$course_feature_body  		  = get_field('course_feature_body');


?>



<!--COURSE FEATURES-->
<section id="course-features">
	<div class="container text-center py-5 ">

		<div class="section-header">

			<?php if ( !empty( $course_feature_image ) ) : ?>
			<img src="<?php echo $course_feature_image['url'] ?>" alt="<?php echo course_feature_image['alt'] ?>">			
			<?php endif ; ?>


			<h2><?php echo $course_feature_title ?> </h2>


			<!--If the user input a body text-->
			<?php if ( !empty( $course_feature_body ) ) : ?>
			<p class="lead">
				<?php echo $course_feature_body ?>
			</p>
			<?php endif; ?>
		</div>


		<div class="row justify-content-center py-4">

			<?php $loop = new WP_Query( array( 'post_type' => 'course_feature', 'orderby' => 'post_id' , 'order' => 'ASC' ) ); ?>

			<?php while( $loop -> have_posts()  ) : $loop -> the_post(); ?>


			<div class="col-sm-2">
				<i class="<?php the_field('course_features_icon') ?>"></i>
				<h4><?php echo the_title() ; ?></h4>
			</div>
			<?php endwhile ;  wp_reset_query() ?>

		</div><!--row-->
	</div><!--container-->

</section>

<!--CHECKED!-->
