<?php

/*
 * output()
 *
**/
function output($data = [], $format = '') {
	
	global $general;
	
	$format = (!empty($format)) ? 'json' : $general['format'];
	
	switch($format) {
		
		case 'json':
			return json_encode($data);
			break;
		
		case 'xml':
			$xml = new SimpleXMLElement('<root/>');
			
			array_walk_recursive($data, array ($xml, 'addChild'));
			
			print $xml->asXML();
			break;
		
	}
	
}