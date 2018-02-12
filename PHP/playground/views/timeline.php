<div class="container mt-5">

	<div class="row mt-5 justify-content-center">
		
		
		<div class="col-md-8">
			<h4> Followed user&#39;s  </h4>	
			<?php displayTweets('timeline') ?>

		</div>

		<?php if(isset($_SESSION['id'])) { ?>
		<div class="col-md-4">
			<?php displaySearch() ?>


		</div>
		<?php } ?>

	</div>
</div>


