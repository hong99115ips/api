<?php

/*
 * data_required()
 *
**/
function data_required($array = [], $method = 'POST') {
	
	$ok = 1;
	
	switch($method) {
		
		case 'GET':
			foreach($array as $e) if(!isset($_GET[$e])) $_GET[$e] = '';

			foreach($array as $e) if(strlen($_GET[$e])==0) $ok = 0;
			break;
		
		case 'POST':
			foreach($array as $e) if(!isset($_POST[$e])) $_POST[$e] = '';

			foreach($array as $e) if(strlen($_POST[$e])==0) $ok = 0;
			break;
		
	}
	
	return $ok;
	
}

/*
 * data()
 *
**/
function data($v) {
	
	global $conn;

	if(!isset($v)) $v = '';
	
	return $conn[1]->real_escape_string($v);
	
}