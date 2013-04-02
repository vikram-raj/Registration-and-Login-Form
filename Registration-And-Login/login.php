<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		require('login_functions.inc.php');
		require('connect.php');
		
		list($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass1']);
		
		if($check) {
			setcookie('user_id', $data['user_id'], time()+3600, '/', '', 0, 0);
			setcookie('first_name', $data['first_name'], time()+3600, '/', '', 0, 0);
			
			redirect_user('loggedin.php');
		}
		else {
			$errors = $data;
		}
		
		mysqli_close($dbc);
	}
	include('login_page.inc.php');
?>
