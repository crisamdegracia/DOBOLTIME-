<div class="container mt-5">

	<div class="row mt-5 justify-content-center">

		<div class="col-md-8">
			<h1 mt-5>My tweet&#39;s</h1>
			<?php if(isset($_SESSION['id'])) { ?>

			<?php displayTweetBox() ?>
			<?php } ?>
			<?php displayTweets('mytweets') ?>

		</div>

		<?php if(isset($_SESSION['id'])) { ?>
		<div class="col-md-4">
			<?php displaySearch() ?>


		</div>
		<?php } ?>

	</div>
</div>


