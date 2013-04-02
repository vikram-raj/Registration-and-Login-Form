<?php
	if(!isset($_COOKIE['user_id'])) {
		require('login_functions.inc.php');
		redirect_user();
	} else {
		setcookie('user_id', '', time()-3600, '/', '', 0, 0);
		setcookie('first_name', '', time()-3600, '/', '', 0, 0);
	}
	
	echo "<h1>Logged Out!</h1>
	<p>You are now logged out, {$_COOKIE['first_name']}!</p>";
	
?>
