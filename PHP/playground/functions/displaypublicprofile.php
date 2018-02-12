<?php

function displaypublicprofile(){
global $link;
	//DISPLAYING ALL THE ACTIVE USERS IN THE DATABASE
	$query = "SELECT * FROM `users` LIMIT 10";
	$result = mysqli_query( $link , $query);

	while($row = mysqli_fetch_assoc($result)){

		/*href gives us the user id of the link*/
		echo "<div style='border: 1px solid #201' class='m-1 px-3 '><a href='?userid=".$row['id']."'>".$row['email']."</a></div>";
	}

}


?>



