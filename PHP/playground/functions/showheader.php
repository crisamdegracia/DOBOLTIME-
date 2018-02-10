<?php
function displayHeader(){
	global $link;
	
	if(isset($_SESSION['id'] )) {


		$query = "SELECT * FROM users  WHERE id = '".$_SESSION['id']."' ";

		$row = mysqli_fetch_assoc(mysqli_query( $link , $query));


		echo  '<span style="color: #000">'.$row['email'].' ' . $_SESSION['id'] . '</span>	<a class="btn btn-outline-danger my-2 my-sm-0" href="?page=logout">logout</a>';
	} else { 
		echo '
					<input type="button" class="btn btn-success" value="Login/Signup" data-toggle="modal" data-target="#exampleModal">' ;
	}
}


?>