<?php /* Template Name: Contact Page */ 

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
get_header();

?>



<?php if( has_post_thumbnail() ) { ?>
<section id="" style="background: url(' <?php echo $thumbnail_url; ?> ') ; background-size:cover" class="feature-image  py-5" data-type="background" data-speed="2">
	<h1 class="page-title py-5 text-center text-white"><?php the_title(); ?></h1>
</section>			
<?php } else { ?>
<section id="" class="feature-image feature-image-default py-5" data-type="background"  data-speed="2">
	<h1 class="page-title py-5 text-center text-white"><?php the_title() ?></h1>
</section>	
<?php } ; ?> 
<!--

<section id="" class="feature-image feature-image-default py-5" data-type="background" data-speed="2">
<h1 class="page-title py-5 text-center text-white">Contact</h1>
</section>			
-->


<div class="container p-5 m-5">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			<section class="main-content text-center">

				<?php while ( have_posts() ) : the_post() ;	?>				
				<?php the_content(); ?>

				<?php endwhile ; ?>
			</section>
		</div>
	</div>
</div>







<?php

get_footer();