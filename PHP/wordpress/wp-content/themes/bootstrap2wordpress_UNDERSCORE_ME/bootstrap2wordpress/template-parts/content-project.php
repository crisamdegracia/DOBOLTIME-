<?php

/*Project Feature section*/

$final_project_title  		  = get_field('final_project_title');
$final_project_body  		 	  = get_field('final_project_body');


?>


<!--PROJECT SECTIONS-->
<section id="project-features">
	<div class="container text-center pt-5">
		<h2><?php echo $final_project_title ?></h2>
		<p class="lead"><?php echo $final_project_body ?> </p>
		<div class="row">

			<?php $loop = new WP_Query( array( 'post_type' => 'project_feature', 'orderby' => 'post_id' , 'order' => 'ASC' ) ); ?>


			<?php while( $loop -> have_posts()  ) : $loop -> the_post(); ?>
			<div class="col-sm-4">

				<!--IF THE USER UPLOADED A THUMBNAIL!!-->
				<?php 
				if( has_post_thumbnail() ){ 
					the_post_thumbnail();
				} 
				?>
				<h3><?php the_title() ?></h3>
				<p><?php  the_content(); ?></p>
			</div>
			<?php endwhile ; wp_reset_query()?>

		</div>
	</div>

</section>

