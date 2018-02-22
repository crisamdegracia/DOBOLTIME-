<?php include('views/header.php') ?>
<?php include('functions.php') ?>
<div class="container">  
	<br />  
	<br />  
	<br />  
	<div class="table-responsive">  
		<h2 align="center">Load More Data using Ajax Jquery</h2><br />  
		<table class="table table-bordered" id="load_data_table">  
			<?php displayvids() ?>
		</table>  
	</div>  
</div>  



<footer class="footer">
	<div class="container">
		<span class="text-muted">&copy; MY WEBSITE 2018</span>
	</div>
</footer>
<script
				src="http://code.jquery.com/jquery-3.3.1.js"
				integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
				crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script type="text/javascript">

	$(document).ready(function(){  

		$(document).on('click', '#btn_more', function(){  

			var last_video_id = $(this).data("vid");  

			$('#btn_more').html("Loading...");  

			$.ajax({  
				url:"actions.php",  
				method:"POST",  
				data:{ last_video_id:last_video_id },  
				dataType:"text",  

				success:function(data)  
				{
					if(data != '')
					{  
						$('#remove_row').remove();  
						$('#load_data_table').append(data);  
					}  
					else  
					{  
						$('#btn_more').html("No Data");  
					}  
				}  
			});  
		});  
	});  


</script>
</body>
</html>