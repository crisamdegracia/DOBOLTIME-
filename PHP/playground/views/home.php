
<div class="container mt-5">

	<div class="row mt-5 justify-content-center">

		<div class="col-md-8">


			<?php if(isset($_SESSION['id'])) { ?>

			<?php displayTweetBox() ?>
			<?php } ?>


			<?php	if(array_key_exists('loadmore', $_GET) && $_GET['loadmore'] !== ''){ ?>
				
			<?php		$limit = ($_GET['loadmore'] !== '' ) ? $_GET['loadmore'] : 3; ?>

			<?php	if($limit < $_GET['loadmore'] + 1) { ?>

			<?php		$limit++; } else { ?>
		
			<?php $limit = 3; }  } else { $limit = 3; } ?>		
			
			
			<?php  displayTweets('home' , $limit) ?>

		</div>

		<?php if(isset($_SESSION['id'])) { ?>
		<div class="col-md-4">
			<?php displaySearch() ?>


		</div>
		<?php } ?>

	</div>
</div>


