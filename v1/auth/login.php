<?php require __DIR__.'/../../autoload.php';

if(data_required(['username', 'password'], 'POST')) {
	
	$result = [];
	
	$query = query('list', 'SELECT * FROM tbl_users WHERE username=\''.data($_POST['username']).'\' AND password2=\''.hash_1(data($_POST['password'])).'\' AND is_delete=0');
	
	if($query['count'] == 1) {
		
		$result['me'] = $query['result'][0];
		
		echo output(['status' => 'ok', 'message' => 'Login successfully', 'result' => $result]);
		
	} else {
		
		echo output(['status' => 'failed', 'message' => 'Login failed']);
		
	}
} else {
	
	echo output(['status' => 'error', 'message' => 'Param error']);
	
}