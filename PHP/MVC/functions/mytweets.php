<?php

$ss = (isset($_SESSION['id'])) ? $_SESSION['id'] : '';
$whereClause = "WHERE userid = '".mysqli_real_escape_string($link, $ss)."' ";

?>