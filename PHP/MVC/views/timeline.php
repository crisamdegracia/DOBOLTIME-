<div class="container">

	<div class="container">
		<div class="row">


			<div class="col-md-8 my-5 py-3">
				<h4 class="text-info">Followed Tweet's</h4>
				<p> <?php echo displayTweets('isFollowing') ?> </p>

			</div> 

			<div class="col-md-4 my-5">
				<?php  displaySearch() ?>
				<?php displayTweetBox() ?>

			</div>
		</div>

	</div>
</div>