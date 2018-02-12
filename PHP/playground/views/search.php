<div class="container mt-5">

	<div class="row mt-5 justify-content-center">

		<div class="col-md-8">
			<h1 mt-5>Search Result&#39;s </h1>

			<?php echo displayTweets('search') ?>

		</div>

		<?php if(isset($_SESSION['id'])) { ?>
		<div class="col-md-4">
			<?php displaySearch() ?>
		</div>
		<?php } ?>

	</div>
</div>


