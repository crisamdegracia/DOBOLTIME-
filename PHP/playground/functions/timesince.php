<?php

function time_since($since) {

	$chunks = array(
		array(60 * 60 * 24 * 365 , 'year'),
		array(60 * 60 * 24 * 30 , 'month'),
		array(60 * 60 * 24 * 7, 'week'),
		array(60 * 60 * 24 , 'day'),
		array(60 * 60 , 'hour'),
		array(60 , 'minute'),
		array(1, 'sec')

	);

	for ($i = 0, $j = count($chunks); $i < $j; $i++) {
		$seconds = $chunks[$i][0];
		$name = $chunks[$i][1];
		$count = floor($since / $seconds);
		if ($count != 0) {
			break;
		}
	} 
	//  	$print = ($count == 0) ? 'just now' ;
	//	
	if( $count == 1){
		return $print = '1 '.$name;
	} else if($count  < 1) {
		return	$print = 'just now';
	} else {
		return $print = "$count {$name}s ago" ;
	}


	//		$print = ($count == 1) ? '1 '.$name : "$count {$name}s";
	//		$print = ($count > 0) ? '1 '.$name : "just now";
	//	return $print;
}

?>