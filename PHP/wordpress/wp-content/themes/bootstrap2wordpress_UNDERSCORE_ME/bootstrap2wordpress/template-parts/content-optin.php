<?php
$optin_text					= get_post_meta( 17, 'optin_text', true );
$optin_btn_txt			= get_post_meta( 17, 'optin_btn_txt', true );
?>
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


<!--CHECKED!-->
