<?php 

$whereClause = "WHERE tweet LIKE '%".mysqli_real_escape_string($link, $_GET['q'])."%' ";


?>