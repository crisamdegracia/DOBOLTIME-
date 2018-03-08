<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_To_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
		the_title( '<h3 class="entry-title">', '</h3>' );
		else :
		the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<div class="post-details">
			<span><i class="fa fa-user"> <?php the_author() ?> </i></span>
			<i class="fa fa-clock-o"> <?php the_date(); ?></i>
			<span><i class="fa fa-folder-open"></i>  <?php the_category(', '); //first paramete is separator 2nd parents 3rd post_id ?>

			</span>

			<span><i class="fa fa-tags"></i> <?php the_tags(); //1st param $before 2nd $sep 3rd $after ?></span>

			<!--EDIT YOUR BLOG-->
			<?php edit_post_link('Edit' , '<span> <i class="fa fa-pencil"></i>' , '</span>'); 
			//params $first = the string you want to display , $2nd = before the string ,$3rd = after the string 
			?>
			<div class="post-comment-badge">
				<a href="<?php comments_link() ?>"><span><i class="fa fa-comments"></i> 
					<?php comments_number(0 , 1 ,'%') //parameter $zero , $one and $more (% sign means whatever the number of the comments there would be) ?>
					</span></a>

			</div>
		</div><!--post details-->


		<?php
	endif; ?>
	</header><!-- .entry-header -->

	<div id="post-img" class="post-image" >
	<?php if( has_post_thumbnail()) : ?> 
		<?php the_post_thumbnail( 'post_thumbnail' , ['class' => ' img-fluid'] ); ?>
	</div><!--post-image-->
	<?php endif ;?>
	<div class="post-excerpt">
		<?php the_content(); ?>
	</div><!--post-excerpt-->

</article><!-- #post-<?php the_ID(); ?> -->
