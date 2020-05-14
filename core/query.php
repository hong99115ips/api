<?php

/*
 * query()
 *
**/
function query($type, $sql, $conn_i = 1) {
	
	global $conn;

	$data = [];
	
	switch($type) {
		
		case 'list':
			$query = $conn[$conn_i]->query($sql);
			
			$data['bool'] = true;
			$data['result'] = [];
			$data['count'] = $query->num_rows;
			
			if ($data['count'] > 0) while($e = $query->fetch_assoc()) $data['result'][] = $e;
			break;
		
		case 'view':
			
			break;
		
		case 'edit':
			
			break;
		
		case 'del':
			
			break;
		
	}
	
	return $data;
	
}