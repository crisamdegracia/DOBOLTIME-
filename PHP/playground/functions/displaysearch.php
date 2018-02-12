<?php


function displaySearch(){

	echo '

	<form class="form-inline"> 
	<input type="hidden" name="page" value="search"> 
		<input id="searchInput" name="q" class="form-control" placeholder="Search something">
		<button class="btn btn-success" id="searchBtn">Search</button>
	</form> 

	';
}



?>