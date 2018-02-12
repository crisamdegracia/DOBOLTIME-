<div class="container mt-5">

	<div class="row mt-5 justify-content-center">

		<div class="col-md-8">
			<?php if(isset($_SESSION['id'])) { ?>

			<?php displayTweetBox() ?>
			<?php } ?>
			<?php  displayTweets('home') ?>

		</div>

		<?php if(isset($_SESSION['id'])) { ?>
		<div class="col-md-4">
			<?php displaySearch() ?>


		</div>
		<?php } ?>

	</div>
</div>


