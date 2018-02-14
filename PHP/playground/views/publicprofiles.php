<div class="container mt-5">

	<div class="row mt-5 justify-content-center">


<?php if(isset($_SESSION['id'])){ ?>
	

		<div class="col-md-8">
		
		
			<h1 mt-5>User Profile&#39;s </h1>




			<?php $_GET['userid'] = (isset($_GET['userid'])?$_GET['userid'] : ''); ?>

			<?php if($_GET['userid'] > 0 ) { ?>

			<?php displayTweets($_GET['userid']) ?>

			<?php } else { ?>
			<?php displaypublicprofile() ?>


			<?php } ?>
		</div>

		<div class="col-md-4">
			<?php displaySearch() ?>


		</div>
		<?php } else { ?>

 <h2>You are not Logged in.</h2>
<?php } ?>
	</div>
</div>


