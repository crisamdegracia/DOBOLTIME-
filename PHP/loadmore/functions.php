
<?php  


$connect = mysqli_connect("localhost", "root", "", "testing");  


function displayvids(){



	global $connect;

	$sql = "SELECT * FROM testing LIMIT 2";  
	$result = mysqli_query($connect, $sql);  
	$video_id = '';  

	while($row = mysqli_fetch_array($result))  {
		echo '
		<tr>  
			<td> '.$row["vid_title"].' </td>  
		</tr>';

		$video_id = $row["id"];
	}  

	echo 
		'
		<tr id="remove_row">  
		<td>
		<button type="button" name="btn_more" data-vid="'.$video_id.'" id="btn_more" class="btn btn-success form-control">more</button>
		</td>  
		</tr> '; 
}

?>