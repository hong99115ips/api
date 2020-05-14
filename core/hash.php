<?php

/*
 * hash_1()
 *
**/
function hash_1($v) {
	
	global $general;

	switch($general['hash']) {
		
		case 'ips';
			$output = md5(md5($v));
			break;
			
		default:
			$output = $v;
		
	}
	
	return $output;
	
}