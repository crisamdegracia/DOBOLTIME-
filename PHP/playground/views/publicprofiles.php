<div class="container mt-5">

	<div class="row mt-5 justify-content-center">

		<div class="col-md-8">
			<h1 mt-5>User Profile&#39;s </h1>




			<?php $_GET['userid'] = (isset($_GET['userid'])?$_GET['userid'] : ''); ?>

			<?php if($_GET['userid'] > 0 ) { ?>

			<?php displayTweets($_GET['userid']) ?>

			<?php } else { ?>
			<?php displaypublicprofile() ?>


			<?php } ?>
		</div>

		<?php if(isset($_SESSION['id'])) { ?>
		<div class="col-md-4">
			<?php displaySearch() ?>


		</div>
		<?php } ?>

	</div>
</div>


