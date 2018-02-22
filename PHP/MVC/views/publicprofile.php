

<div class="container">
	<div class="row">



		<div class="col-md-8 my-5 py-3">

			<!--checks the existence of userId -->

			<?php  $_GET['userid'] = (isset($_GET['userid'])) ? $_GET['userid'] : '' ;  ?>

			<?php if (  $_GET['userid']  ) { ?>

			<?php displayTweets( $_GET['userid'] );?>

			<?php } else { ?> 

			<h4 class="text-info">Active Users</h4>

			<p> <?php echo displayUsers(); ?> </p>
			<?php } ?>
		</div> 

		<div class="col-md-4 my-5">
			<?php  displaySearch() ?>
			<?php displayTweetBox() ?>

		</div>

	</div>
</div> 