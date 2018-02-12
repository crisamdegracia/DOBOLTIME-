<?php

function displaySearchResults($input){
	global $link;
	
	
	$query = "SELECT * FROM users WHERE '&".mysqli_real_escape_string($link, $input)."&' ";
	$result = mysqli_query($link, $query);
	
	while($row = mysqli_fetch_assoc($result)){

	echo $row;
	}
}


?>