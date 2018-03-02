<?php   /*Template Name: Resources Page*/ 

get_header();


$thumbnail_url   = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );


/*Resources Features*/


?>



<?php if( has_post_thumbnail() ){  ?>	

<section id="" class="feature-image py-5" style="background:url('<?php echo $thumbnail_url ?>')" data-type="background" data-speed="2">
	<h1 class="page-title py-5 text-center text-white"><?php the_title() ?></h1>
</section>

<?php } else { ?>  <!--FALL BACK IMAGE-->
<section id="" class="feature-image feature-image-default py-5" data-type="background" data-speed="2">
	<h1 class="page-title py-5 text-center text-white"><?php the_title(); ?></h1>
</section>			
<?php } ?>

<!--main content-->

<div class="container">
	<div id="primary" class="row  mt-5">

		<section class="main-content">
			<div id="content" class="col-sm-12">

				<?php while( have_posts() ) : the_post();  ?>

				<p class="lead"><?php the_content(); ?> </p>

				<?php endwhile ; ?>
			</div>
			<hr class="lead">
			<div class="container">


				<div class="row resources-row clearfix" >

					<?php 

					$loop  = new WP_query( array( "post_type" => "resources_features" , "orderby" => "post_id" , "order" => "ASC" ))

					?>
					<?php while( $loop -> have_posts()  ) : $loop -> the_post(); ?>
					
					<?php
					$resources_img			 	= get_field('resources_image');
					$resources_url 				= get_field('resources_url');
					$add_button						= get_field('add_button');
					$button_text 					= get_field('button_text'); ?>

					<div class="resources col-12 col-sm-12 col-md-4 col-lg-4">

						<img src="<?php echo $resources_img[url] ?>" alt="$resources_img[alt]">
		
						<h3><a href="<?php echo $resource_url ; ?>"><?php  the_title() ?></a></h3>
						<p><?php the_content(); ?></p>
						<?php if ( ! empty( $button_text ) ) { ?>

						<a href="<?php echo $resource_url ; ?>" class="btn btn-success"><?php echo $button_text; ?></a>
						<?php } ?>
					</div><!--resources-->
					<?php endwhile ; ?>

				</div><!--resources row-->
			</div><!--container-->
		</section>


	</div>
</div>



<?php
get_footer();

