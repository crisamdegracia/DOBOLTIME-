<div class="container mt-5">

	<div class="row mt-5 justify-content-center">

		<?php if(isset($_SESSION['id'])) { ?>
		<div class="col-md-8">
			<h1 mt-5>My tweet&#39;s</h1>

			<?php displayTweetBox() ?>
			
			
			<?php	if(array_key_exists('loadmore', $_GET) && $_GET['loadmore'] !== ''){ ?>
				
			<?php		$limit = ($_GET['loadmore'] !== '' ) ? $_GET['loadmore'] : 3; ?>

			<?php	if($limit < $_GET['loadmore'] + 1) { ?>

			<?php		$limit++; } else { ?>
		
			<?php $limit = 3; }  } else { $limit = 3; } ?>		
			
			
			
			
			<?php displayTweets('mytweets' , $limit) ?>

		</div>

		<div class="col-md-4">
			<?php displaySearch() ?>


		</div>
		<?php }  else { ?>
	<h1>You are not logged in.</h1>
<?php } ?>
	</div>
</div>


